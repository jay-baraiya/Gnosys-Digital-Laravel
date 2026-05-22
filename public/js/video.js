// Video Player Controller
class VideoPlayer {
    constructor() {
        this.video = document.getElementById('mainVideo');
        this.playPauseBtn = document.getElementById('playPauseBtn');
        this.rewind10Btn = document.getElementById('rewind10Btn');
        this.skip10SecBtn = document.getElementById('skip10SecBtn');
        this.speedBtn = document.getElementById('speedBtn');
        this.volumeBtn = document.getElementById('volumeBtn');
        this.fullscreenBtn = document.getElementById('fullscreenBtn');
        this.progressBar = document.querySelector('.video-progress-filled');
        this.currentTimeEl = document.getElementById('currentTime');
        this.durationEl = document.getElementById('duration');

        this.speeds = [0.5, 1, 1.5, 2];
        this.currentSpeedIndex = 1; // Default to 1x speed

        this.init();
    }

    init() {
        this.setupEventListeners();
        this.setupVideoEvents();
        this.setupUpload();
        this.setupDragAndDrop();
    }

    setupEventListeners() {
        // Play/Pause
        if (this.playPauseBtn) {
            this.playPauseBtn.addEventListener('click', () => this.togglePlayPause());
        }

        // Rewind 10 seconds
        if (this.rewind10Btn) {
            this.rewind10Btn.addEventListener('click', () => this.rewind10Seconds());
        }

        // Skip 10 seconds
        if (this.skip10SecBtn) {
            this.skip10SecBtn.addEventListener('click', () => this.skip10Seconds());
        }

        // Double tap/click to skip 10 seconds
        if (this.video) {
            this.video.addEventListener('dblclick', () => this.skip10Seconds());
            this.video.addEventListener('touchend', () => this.handleDoubleTap());
        }

        // Speed control
        if (this.speedBtn) {
            this.speedBtn.addEventListener('click', () => this.toggleSpeed());
        }

        // Volume control
        if (this.volumeBtn) {
            this.volumeBtn.addEventListener('click', () => this.toggleMute());
        }

        // Fullscreen
        if (this.fullscreenBtn) {
            this.fullscreenBtn.addEventListener('click', () => this.toggleFullscreen());
        }

        // Progress bar
        if (this.progressBar) {
            this.progressBar.parentElement.addEventListener('click', (e) => this.seekVideo(e));
        }

        // Keyboard shortcuts
        document.addEventListener('keydown', (e) => this.handleKeyboard(e));
    }

    setupVideoEvents() {
        if (this.video) {
            this.video.addEventListener('loadedmetadata', () => {
                this.durationEl.textContent = this.formatTime(this.video.duration);
            });

            this.video.addEventListener('timeupdate', () => {
                this.updateProgress();
                this.currentTimeEl.textContent = this.formatTime(this.video.currentTime);
            });

            this.video.addEventListener('ended', () => {
                this.playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
            });
        }
    }

    togglePlayPause() {
        if (this.video.paused) {
            this.video.play();
            this.playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
        } else {
            this.video.pause();
            this.playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
        }
    }

    rewind10Seconds() {
        this.video.currentTime = Math.max(0, this.video.currentTime - 10);
        this.showNotification('Rewound 10 seconds');
    }

    skip10Seconds() {
        this.video.currentTime = Math.min(this.video.currentTime + 10, this.video.duration);
        this.showNotification('Skipped forward 10 seconds');
    }

    toggleSpeed() {
        this.currentSpeedIndex = (this.currentSpeedIndex + 1) % this.speeds.length;
        const newSpeed = this.speeds[this.currentSpeedIndex];
        this.video.playbackRate = newSpeed;
        this.speedBtn.querySelector('span').textContent = newSpeed + 'x';

        // Update button state
        if (newSpeed === 1) {
            this.speedBtn.classList.remove('active');
        } else {
            this.speedBtn.classList.add('active');
        }

        this.showNotification(`Playback speed: ${newSpeed}x`);
    }

    toggleMute() {
        this.video.muted = !this.video.muted;
        this.volumeBtn.innerHTML = this.video.muted ?
            '<i class="fas fa-volume-mute"></i>' :
            '<i class="fas fa-volume-up"></i>';
    }

    toggleFullscreen() {
        if (!document.fullscreenElement) {
            this.video.requestFullscreen();
            this.fullscreenBtn.innerHTML = '<i class="fas fa-compress"></i>';
        } else {
            document.exitFullscreen();
            this.fullscreenBtn.innerHTML = '<i class="fas fa-expand"></i>';
        }
    }

    updateProgress() {
        const progress = (this.video.currentTime / this.video.duration) * 100;
        this.progressBar.style.width = progress + '%';
    }

    seekVideo(e) {
        const rect = this.progressBar.parentElement.getBoundingClientRect();
        const pos = (e.clientX - rect.left) / rect.width;
        this.video.currentTime = pos * this.video.duration;
    }

    handleKeyboard(e) {
        switch(e.key) {
            case ' ':
            case 'k':
                this.togglePlayPause();
                break;
            case 'ArrowRight':
                this.skip10Seconds();
                break;
            case 'ArrowLeft':
                this.video.currentTime = Math.max(0, this.video.currentTime - 10);
                break;
            case 'f':
                this.toggleFullscreen();
                break;
            case 'm':
                this.toggleMute();
                break;
        }
    }

    handleDoubleTap() {
        if (!this.lastTap) {
            this.lastTap = Date.now();
            return;
        }

        const currentTime = Date.now();
        if (currentTime - this.lastTap < 300) {
            this.skip10Seconds();
        }
        this.lastTap = currentTime;
    }

    formatTime(seconds) {
        const minutes = Math.floor(seconds / 60);
        const remainingSeconds = Math.floor(seconds % 60);
        return `${minutes}:${remainingSeconds.toString().padStart(2, '0')}`;
    }

    showNotification(message) {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = 'video-notification';
        notification.textContent = message;
        document.body.appendChild(notification);

        // Show notification
        setTimeout(() => notification.classList.add('show'), 100);

        // Hide notification after 2 seconds
        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => notification.remove(), 300);
        }, 2000);
    }

    setupUpload() {
        const uploadBtn = document.getElementById('uploadBtn');
        const fileInput = document.getElementById('videoFileInput');

        if (uploadBtn && fileInput) {
            uploadBtn.addEventListener('click', () => {
                const title = document.getElementById('videoTitleInput').value;
                const description = document.getElementById('videoDescInput').value;
                const module = document.getElementById('courseModule').value;

                if (!title) {
                    this.showNotification('Please enter a video title');
                    return;
                }

                fileInput.click();
            });
            fileInput.addEventListener('change', (e) => {
                this.handleFileUpload(e.target.files[0]);
            });
        }

    }

    setupDragAndDrop() {
        const dropZone = document.getElementById('dropZone');

        if (dropZone) {
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropZone.addEventListener(eventName, (e) => {
                    e.preventDefault();
                    e.stopPropagation();

                    if (eventName === 'dragover') {
                        dropZone.classList.add('dragover');
                    } else if (eventName === 'dragleave') {
                        dropZone.classList.remove('dragover');
                    }
                });
            });

            dropZone.addEventListener('drop', (e) => {
                const files = e.dataTransfer.files;
                if (files.length > 0) {
                    this.handleFileUpload(files[0]);
                }
            });
        }
    }

    handleFileUpload(file) {
        if (!file || !file.type.startsWith('video/')) {
            this.showNotification('Please select a valid video file');
            return;
        }

        // Show upload progress
        this.showNotification('Uploading video...');

        // Create video URL for preview
        const videoURL = URL.createObjectURL(file);
        this.video.src = videoURL;

        // Update video info
        const title = document.getElementById('videoTitleInput').value || file.name;
        const description = document.getElementById('videoDescInput').value || 'No description provided';
        const module = document.getElementById('courseModule').value;

        document.getElementById('videoTitle').textContent = title;
        document.getElementById('videoDescription').textContent = description;
        document.getElementById('videoThumbnail').src = videoURL;

        // Add to video list
        this.addToVideoList({
            title: title,
            description: description,
            module: module,
            url: videoURL,
            file: file,
            uploadDate: new Date().toLocaleDateString()
        });

        // Generate thumbnails
        this.generateThumbnails(videoURL);

        this.showNotification('Video uploaded successfully!');
    }

    addToVideoList(videoData) {
        const videoList = document.getElementById('videoList');
        const videoItem = document.createElement('div');
        videoItem.className = 'col-md-4 col-sm-6 mb-4';
        videoItem.innerHTML = `
            <div class="video-item" data-aos="fade-up">
                <video src="${videoData.url}" class="video-thumbnail"></video>
                <div class="video-info-overlay">
                    <h5>${videoData.title}</h5>
                    <p>${videoData.module ? 'Module ' + videoData.module : 'General Content'}</p>
                </div>
            </div>
        `;

        videoList.appendChild(videoItem);

        // Add click event to play video
        videoItem.addEventListener('click', () => {
            this.video.src = videoData.url;
            document.getElementById('videoTitle').textContent = videoData.title;
            document.getElementById('videoDescription').textContent = videoData.description;
            this.video.play();

            // Scroll to player
            document.querySelector('.video-player-section').scrollIntoView({
                behavior: 'smooth'
            });
        });
    }

    generateThumbnails(videoURL) {
        const thumbnailGrid = document.querySelector('.thumbnail-grid');
        thumbnailGrid.innerHTML = '';

        // Create temporary video element for thumbnail generation
        const tempVideo = document.createElement('video');
        tempVideo.src = videoURL;
        tempVideo.addEventListener('loadeddata', () => {
            const duration = tempVideo.duration;
            const thumbnailCount = Math.min(10, Math.floor(duration / 10)); // One thumbnail per 10 seconds

            for (let i = 0; i < thumbnailCount; i++) {
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                canvas.width = 160;
                canvas.height = 90;

                tempVideo.currentTime = i * 10;

                setTimeout(() => {
                    ctx.drawImage(tempVideo, 0, 0, canvas.width, canvas.height);

                    const thumbnail = document.createElement('img');
                    thumbnail.src = canvas.toDataURL();
                    thumbnail.className = 'thumbnail';
                    thumbnail.addEventListener('click', () => {
                        this.video.currentTime = i * 10;
                        this.video.play();
                    });

                    thumbnailGrid.appendChild(thumbnail);
                }, 100);
            }
        });
    }
}

// Initialize video player when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new VideoPlayer();

    // Initialize AOS for video page
    AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 100
    });
});
