<!-- News & Notice Component with Auto-Scrolling -->
<section class="news-notice-component">
    <div class="news-card-wrapper">
        <div class="info-card news-card">
            <!-- Header -->
            <div class="card-header-custom card-header-news">
                <h3 class="card-title-custom">NEWS & NOTICE</h3>
                <a href="#view-all-news" class="view-all-link">View All</a>
            </div>

            <!-- Content with Auto-Scroll -->
            <div class="card-content-custom" id="newsScrollContainer">
                <!-- News Item 1 -->
                <div class="news-item">
                    <div class="news-date-badge">
                        <span class="badge bg-primary">2025-2026</span>
                        <span class="badge-new ms-2">
                            <img src="new-icon.gif" alt="New" style="height: 20px;">
                        </span>
                    </div>
                    <p class="news-text">
                        PYUSP BA B.Sc 3rd Semester Course Registration notice, 2025
                        <a href="#" class="click-here-link">Click Here</a>
                    </p>
                </div>
                <hr>

                <!-- News Item 2 -->
                <div class="news-item">
                    <div class="news-date-badge">
                        <span class="badge bg-primary">2025-2026</span>
                        <span class="badge-new ms-2">
                            <img src="new-icon.gif" alt="New" style="height: 20px;">
                        </span>
                    </div>
                    <p class="news-text">
                        Notice for recruitment of a Contractual faculty in the department of Zoology
                        <a href="#" class="click-here-link">Click Here</a>
                    </p>
                </div>
                <hr>

                <!-- News Item 3 -->
                <div class="news-item">
                    <div class="news-date-badge">
                        <span class="badge bg-primary">2025-2026</span>
                    </div>
                    <p class="news-text">
                        Notice for Admission, 2025
                        <a href="#" class="click-here-link">Click Here</a>
                    </p>
                </div>
                <hr>

                <!-- News Item 4 -->
                <div class="news-item">
                    <div class="news-date-badge">
                        <span class="badge bg-primary">2024-2025</span>
                    </div>
                    <p class="news-text">
                        TDC 3rd Semester Admission Notice
                        <a href="#" class="click-here-link">Click Here</a>
                    </p>
                </div>
                <hr>

                <!-- News Item 5 -->
                <div class="news-item">
                    <div class="news-date-badge">
                        <span class="badge bg-primary">2024-2025</span>
                    </div>
                    <p class="news-text">
                        PG 1st Semester Admission Notice
                        <a href="#" class="click-here-link">Click Here</a>
                    </p>
                </div>
                <hr>

                <!-- News Item 6 -->
                <div class="news-item">
                    <div class="news-date-badge">
                        <span class="badge bg-primary">2024-2025</span>
                    </div>
                    <p class="news-text">
                        Annual Sports Meet 2025
                        <a href="#" class="click-here-link">Click Here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* News & Notice Component Styles */
    .news-notice-component {
        padding: 20px 0;
    }

    .news-card-wrapper {
        max-width: 100%;
    }

    .info-card {
        background: white;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .card-header-custom {
        color: white;
        padding: 15px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .card-header-news {
        background: linear-gradient(135deg, #002855 0%, #003b7a 100%);
    }

    .card-title-custom {
        margin: 0;
        font-size: 20px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .view-all-link {
        color: white;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        transition: opacity 0.3s;
    }

    .view-all-link:hover {
        opacity: 0.8;
        color: white;
    }

    .card-content-custom {
        padding: 20px;
        flex-grow: 1;
        overflow-y: auto;
        max-height: 500px;
        scroll-behavior: smooth;
    }

    .card-content-custom hr {
        margin: 15px 0;
        opacity: 0.3;
    }

    .news-item {
        margin-bottom: 10px;
    }

    .news-date-badge {
        margin-bottom: 8px;
    }

    .news-text {
        font-size: 14px;
        line-height: 1.6;
        color: #333;
        margin: 0;
    }

    .click-here-link {
        color: #003b7a;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.3s;
    }

    .click-here-link:hover {
        color: #dc3545;
        text-decoration: underline;
    }

    .card-content-custom::-webkit-scrollbar {
        width: 6px;
    }

    .card-content-custom::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    .card-content-custom::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
    }

    .card-content-custom::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    @media (max-width: 576px) {
        .card-title-custom {
            font-size: 16px;
        }

        .view-all-link {
            font-size: 12px;
        }

        .news-text {
            font-size: 13px;
        }
    }
</style>

<script>
    // Auto-scroll for News & Notice
    (function() {
        const newsContainer = document.getElementById('newsScrollContainer');
        let scrollInterval;
        let isPaused = false;

        function startAutoScroll() {
            scrollInterval = setInterval(() => {
                if (!isPaused && newsContainer) {
                    // Scroll down by 1 pixel
                    newsContainer.scrollTop += 1;

                    // Reset to top when reaching bottom
                    if (newsContainer.scrollTop >= newsContainer.scrollHeight - newsContainer.clientHeight) {
                        setTimeout(() => {
                            newsContainer.scrollTop = 0;
                        }, 2000); // Wait 2 seconds before resetting
                    }
                }
            }, 50); // Adjust speed (lower = faster)
        }

        // Pause on hover
        newsContainer.addEventListener('mouseenter', () => {
            isPaused = true;
        });

        // Resume on mouse leave
        newsContainer.addEventListener('mouseleave', () => {
            isPaused = false;
        });

        // Start auto-scroll
        startAutoScroll();
    })();
</script>
