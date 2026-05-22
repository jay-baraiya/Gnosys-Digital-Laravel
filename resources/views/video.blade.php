@extends('layouts.app')

@section('content')
<!-- Video Player Section -->
<section class="video-player-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Video Container -->
                <div class="video-container" data-aos="fade-up">
                    <!-- Main Video Player -->
                    <div class="video-wrapper">
                        <video id="mainVideo" class="video-player" preload="metadata">
                            <source src="" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        
                        <!-- Video Overlay Controls -->
                        <div class="video-overlay">
                            <!-- Play/Pause Button -->
                                <button id="playPauseBtn" class="video-control-btn">
                                    <i class="fas fa-play"></i>
                                </button>
                            
                            <!-- Progress Bar -->
                            <div class="video-progress-container">
                                <div class="video-progress">
                                    <div class="video-progress-filled"></div>
                                </div>
                                <div class="video-time">
                                    <span id="currentTime">0:00</span> / <span id="duration">0:00</span>
                                </div>
                            </div>
                            
                            <!-- Control Buttons -->
                            <div class="video-controls">
                                <!-- Rewind 10 Sec Button -->
                                <button id="rewind10Btn" class="video-control-btn rewind-btn">
                                    <i class="fas fa-undo-alt"></i>
                                    <span>-10s</span>
                                </button>
                                
                                <!-- Play/Pause Button -->
                                <button id="playPauseBtn" class="video-control-btn play-pause-btn">
                                    <i class="fas fa-pause"></i>
                                </button>
                                
                                <!-- Skip 10 Sec Button -->
                                <button id="skip10SecBtn" class="video-control-btn skip-btn">
                                    <i class="fas fa-forward"></i>
                                    <span>+10s</span>
                                </button>
                                
                                <!-- Speed Control -->
                                <button id="speedBtn" class="video-control-btn speed-btn">
                                    <i class="fas fa-tachometer-alt"></i>
                                    <span>1x</span>
                                </button>
                                
                                <!-- Volume Control -->
                                <button id="volumeBtn" class="video-control-btn">
                                    <i class="fas fa-volume-up"></i>
                                </button>
                                
                                <!-- Fullscreen Button -->
                                <button id="fullscreenBtn" class="video-control-btn">
                                    <i class="fas fa-expand"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Video Preview Thumbnails -->
                    <div class="video-thumbnails">
                        <div class="thumbnail-grid">
                            <!-- Thumbnails will be generated dynamically -->
                        </div>
                    </div>
                </div>
                
                <!-- Video Info -->
                <div class="video-info" data-aos="fade-up" data-aos-delay="200">
                    <div class="video-header">
                        <div class="video-thumbnail-small">
                            <img id="videoThumbnail" src="" alt="Video thumbnail" class="img-fluid rounded">
                        </div>
                        <div class="video-details">
                            <h2 id="videoTitle" class="video-title">Video Title</h2>
                            <div class="video-meta">
                                <span id="videoViews" class="video-views"><i class="fas fa-eye"></i> 0 views</span>
                                <span id="videoDate" class="video-date"><i class="fas fa-calendar"></i> Uploaded today</span>
                            </div>
                            <p id="videoDescription" class="video-description">Video description will appear here...</p>
                        </div>
                    </div>
                    
                    <!-- Course/Module Info -->
                    <div class="course-info">
                        <h4 class="course-title">Course Content</h4>
                        <div class="module-list">
                            <div class="module-item" data-module="1">
                                <div class="module-icon">
                                    <i class="fas fa-play-circle"></i>
                                </div>
                                <div class="module-content">
                                    <h5>Module 1: Introduction</h5>
                                    <p>Getting started with basics</p>
                                    <span class="module-duration">10:30</span>
                                </div>
                            </div>
                            <div class="module-item" data-module="2">
                                <div class="module-icon">
                                    <i class="fas fa-play-circle"></i>
                                </div>
                                <div class="module-content">
                                    <h5>Module 2: Advanced Topics</h5>
                                    <p>Deep dive into concepts</p>
                                    <span class="module-duration">15:45</span>
                                </div>
                            </div>
                            <div class="module-item" data-module="3">
                                <div class="module-icon">
                                    <i class="fas fa-play-circle"></i>
                                </div>
                                <div class="module-content">
                                    <h5>Module 3: Practical Examples</h5>
                                    <p>Real-world applications</p>
                                    <span class="module-duration">12:20</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Video Upload Section -->
                <div class="video-upload-section" data-aos="fade-up" data-aos-delay="300">
                    <h3>Upload Your Video</h3>
                    <div class="upload-area">
                        <div class="upload-drop-zone" id="dropZone">
                            <i class="fas fa-cloud-upload-alt fa-3x"></i>
                            <h4>Drag & Drop Video Here</h4>
                            <p>or <button class="btn-link" onclick="document.getElementById('videoFileInput').click()">Browse Files</button></p>
                            <input type="file" id="videoFileInput" accept="video/*" style="display: none;">
                        </div>
                        <div class="upload-options">
                            <div class="form-group">
                                <label for="videoTitleInput">Video Title</label>
                                <input type="text" id="videoTitleInput" class="form-control" placeholder="Enter video title">
                            </div>
                            <div class="form-group">
                                <label for="videoDescInput">Description</label>
                                <textarea id="videoDescInput" class="form-control" rows="3" placeholder="Enter video description"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="courseModule">Course Module</label>
                                <select id="courseModule" class="form-control">
                                    <option value="">Select Module</option>
                                    <option value="1">Module 1: Introduction</option>
                                    <option value="2">Module 2: Advanced Topics</option>
                                    <option value="3">Module 3: Practical Examples</option>
                                </select>
                            </div>
                            <button id="uploadBtn" class="btn-gnosys">
                                <i class="fas fa-upload"></i> Upload Video
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video List Section -->
<section class="video-list-section section-padding section-bg-light">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-12" data-aos="fade-up">
                <span class="sub-heading">Content Library</span>
                <h2 class="section-title">All Videos</h2>
            </div>
        </div>
        <div class="row g-4" id="videoList">
            <!-- Video items will be dynamically added here -->
        </div>
    </div>
</section>
@endsection
