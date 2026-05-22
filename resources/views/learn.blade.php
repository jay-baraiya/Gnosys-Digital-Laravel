@extends('layouts.app')

@section('content')
<!-- Learning Section -->
<section class="learning-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- Module Navigation -->
                <div class="module-navigation" data-aos="fade-up">
                    <div class="module-nav-header">
                        <h3>Course Modules</h3>
                        <div class="module-progress">
                            <div class="progress-bar">
                                <div class="progress-fill" style="width: 0%"></div>
                            </div>
                            <span class="progress-text">0% Complete</span>
                        </div>
                    </div>
                    <div class="module-list-nav">
                        <!-- Modules will be dynamically loaded -->
                    </div>
                </div>
                
                <!-- Video Player Area -->
                <div class="video-player-area" data-aos="fade-up" data-aos-delay="200">
                    <!-- Current Module Info -->
                    <div class="current-module-info">
                        <div class="module-header">
                            <div class="module-icon-large">
                                <i class="fas fa-play-circle"></i>
                            </div>
                            <div class="module-details">
                                <h4 id="currentModuleTitle">Module 1: Introduction</h4>
                                <p id="currentModuleDesc">Getting started with basics</p>
                                <div class="module-meta">
                                    <span class="module-duration">10:30</span>
                                    <span class="module-status">In Progress</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Video Player -->
                    <div class="video-container">
                        <video id="learningVideo" class="video-player" preload="metadata">
                            <source src="" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                        
                        <!-- Video Overlay Controls -->
                        <div class="video-overlay">
                            <!-- Previous Value Button -->
                            <button id="prevValueBtn" class="video-control-btn prev-btn">
                                <i class="fas fa-chevron-left"></i>
                                <span>Previous</span>
                            </button>
                            
                            <!-- Rewind 10 Sec Button -->
                            <button id="rewind10Btn" class="video-control-btn rewind-btn">
                                <i class="fas fa-undo-alt"></i>
                                <span>-10s</span>
                            </button>
                            
                            <!-- Play/Pause Button -->
                            <button id="playPauseBtn" class="video-control-btn play-pause-btn">
                                <i class="fas fa-pause"></i>
                                <span>Pause</span>
                            </button>
                            
                            <!-- Skip 10 Sec Button -->
                            <button id="skip10SecBtn" class="video-control-btn skip-btn">
                                <i class="fas fa-forward"></i>
                                <span>+10s</span>
                            </button>
                            
                            <!-- Next Value Button -->
                            <button id="nextValueBtn" class="video-control-btn next-btn">
                                <span>Next</span>
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                        
                        <!-- Progress Bar -->
                        <div class="video-progress-container">
                            <div class="video-progress">
                                <div class="video-progress-filled"></div>
                            </div>
                            <div class="video-time">
                                <span id="currentTime">0:00</span> / <span id="duration">0:00</span>
                            </div>
                        </div>
                        
                        <!-- Bottom Controls -->
                        <div class="video-controls-bottom">
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
                
                <!-- Course Content -->
                <div class="course-content" data-aos="fade-up" data-aos-delay="300">
                    <div class="content-tabs">
                        <ul class="nav nav-tabs" id="contentTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#overview">
                                    <i class="fas fa-book-open"></i> Overview
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#resources">
                                    <i class="fas fa-file-alt"></i> Resources
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#quiz">
                                    <i class="fas fa-question-circle"></i> Quiz
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#notes">
                                    <i class="fas fa-sticky-note"></i> Notes
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="tab-content">
                        <!-- Overview Tab -->
                        <div class="tab-pane fade show active" id="overview">
                            <h4>Module Overview</h4>
                            <div class="overview-content">
                                <div class="learning-objectives">
                                    <h5>Learning Objectives</h5>
                                    <ul id="learningObjectives">
                                        <li>Understand the basic concepts</li>
                                        <li>Learn fundamental principles</li>
                                        <li>Complete practical exercises</li>
                                    </ul>
                                </div>
                                <div class="module-outcomes">
                                    <h5>Expected Outcomes</h5>
                                    <ul id="learningOutcomes">
                                        <li>Ability to apply concepts</li>
                                        <li>Complete assessment tasks</li>
                                        <li>Earn certificate of completion</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Resources Tab -->
                        <div class="tab-pane fade" id="resources">
                            <h4>Module Resources</h4>
                            <div class="resources-grid">
                                <div class="resource-item">
                                    <i class="fas fa-file-pdf"></i>
                                    <span>Module PDF Guide</span>
                                </div>
                                <div class="resource-item">
                                    <i class="fas fa-video"></i>
                                    <span>Supplementary Videos</span>
                                </div>
                                <div class="resource-item">
                                    <i class="fas fa-download"></i>
                                    <span>Exercise Files</span>
                                </div>
                                <div class="resource-item">
                                    <i class="fas fa-link"></i>
                                    <span>External Links</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Quiz Tab -->
                        <div class="tab-pane fade" id="quiz">
                            <h4>Module Quiz</h4>
                            <div class="quiz-container">
                                <div class="quiz-progress">
                                    <span>Progress: <span id="quizProgress">0/0</span></span>
                                </div>
                                <div class="quiz-questions" id="quizQuestions">
                                    <!-- Quiz questions will be dynamically loaded -->
                                </div>
                                <button id="startQuizBtn" class="btn-gnosys">
                                    <i class="fas fa-play"></i> Start Quiz
                                </button>
                            </div>
                        </div>
                        
                        <!-- Notes Tab -->
                        <div class="tab-pane fade" id="notes">
                            <h4>Personal Notes</h4>
                            <div class="notes-container">
                                <textarea id="notesArea" class="form-control" rows="10" placeholder="Take your notes here..."></textarea>
                                <div class="notes-actions">
                                    <button id="saveNotesBtn" class="btn-gnosys-outline">
                                        <i class="fas fa-save"></i> Save Notes
                                    </button>
                                    <button id="clearNotesBtn" class="btn-gnosys-outline">
                                        <i class="fas fa-trash"></i> Clear
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Module Completion Modal -->
<div class="modal fade" id="moduleCompleteModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Module Completed!</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="completion-stats">
                    <div class="stat-item">
                        <i class="fas fa-check-circle text-success"></i>
                        <span>Module Completed</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-clock text-info"></i>
                        <span>Time: <span id="completionTime">25:30</span></span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-trophy text-warning"></i>
                        <span>Score: <span id="completionScore">85%</span></span>
                    </div>
                </div>
                <div class="next-module-info">
                    <h6>Ready for Next Module?</h6>
                    <p>Great job completing this module! You can now proceed to the next module.</p>
                </div>
            </div>
            <div class="modal-footer">
                <button id="continueToNextBtn" class="btn-gnosys">
                    <i class="fas fa-arrow-right"></i> Continue to Next Module
                </button>
                <button id="reviewModuleBtn" class="btn-gnosys-outline">
                    <i class="fas fa-redo"></i> Review Module
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
