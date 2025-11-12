<!-- Tenders Component with Auto-Scrolling -->
<section class="tenders-component">
    <div class="tenders-card-wrapper">
        <div class="info-card tenders-card">
            <!-- Header -->
            <div class="card-header-custom card-header-tenders">
                <h3 class="card-title-custom">Tenders</h3>
                <a href="#view-all-tenders" class="view-all-link">View All</a>
            </div>

            <!-- Content with Auto-Scroll -->
            <div class="card-content-custom" id="tendersScrollContainer">
                <!-- Tender Item 1 -->
                <div class="tender-item">
                    <div class="tender-date-badge">
                        <span class="badge bg-success">2025-2026</span>
                    </div>
                    <p class="tender-text">
                        NOTICE inviting Tender for Publication of Books
                        <a href="#" class="click-here-link">Click Here</a>
                    </p>
                </div>
                <hr>

                <!-- Tender Item 2 -->
                <div class="tender-item">
                    <div class="tender-date-badge">
                        <span class="badge bg-success">2021-2022</span>
                    </div>
                    <p class="tender-text">
                        NOTICE INVITING QUOTATION(2), 2022
                        <a href="#" class="click-here-link">Click Here</a>
                    </p>
                </div>
                <hr>

                <!-- Tender Item 3 -->
                <div class="tender-item">
                    <div class="tender-date-badge">
                        <span class="badge bg-success">2021-2022</span>
                    </div>
                    <p class="tender-text">
                        NOTICE INVITING QUOTATION(1), 2022
                        <a href="#" class="click-here-link">Click Here</a>
                    </p>
                </div>
                <hr>

                <!-- Tender Item 4 -->
                <div class="tender-item">
                    <div class="tender-date-badge">
                        <span class="badge bg-success">2021-2022</span>
                    </div>
                    <p class="tender-text">
                        Tender Cancellation Notice
                        <a href="#" class="click-here-link">Click Here</a>
                    </p>
                </div>
                <hr>

                <!-- Tender Item 5 -->
                <div class="tender-item">
                    <div class="tender-date-badge">
                        <span class="badge bg-success">2021-2022</span>
                    </div>
                    <p class="tender-text">
                        NOTICE INVITING QUOTATION, 2022
                        <a href="#" class="click-here-link">Click Here</a>
                    </p>
                </div>
                <hr>

                <!-- Tender Item 6 -->
                <div class="tender-item">
                    <div class="tender-date-badge">
                        <span class="badge bg-info">2021-2022</span>
                    </div>
                    <p class="tender-text">
                        Canteen Tender, 2022
                        <a href="#" class="click-here-link">Click Here</a>
                    </p>
                </div>
                <hr>

                <!-- Tender Item 7 -->
                <div class="tender-item">
                    <div class="tender-date-badge">
                        <span class="badge bg-info">2020-2021</span>
                    </div>
                    <p class="tender-text">
                        Infrastructure Development Tender
                        <a href="#" class="click-here-link">Click Here</a>
                    </p>
                </div>
                <hr>

                <!-- Tender Item 8 -->
                <div class="tender-item">
                    <div class="tender-date-badge">
                        <span class="badge bg-info">2020-2021</span>
                    </div>
                    <p class="tender-text">
                        Library Equipment Procurement
                        <a href="#" class="click-here-link">Click Here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Tenders Component Styles */
    .tenders-component {
        padding: 20px 0;
    }

    .tenders-card-wrapper {
        max-width: 100%;
    }

    .card-header-tenders {
        background: linear-gradient(135deg, #28a745 0%, #218838 100%);
    }

    .tender-item {
        margin-bottom: 10px;
    }

    .tender-date-badge {
        margin-bottom: 8px;
    }

    .tender-text {
        font-size: 14px;
        line-height: 1.6;
        color: #333;
        margin: 0;
    }

    @media (max-width: 576px) {
        .tender-text {
            font-size: 13px;
        }
    }
</style>

<script>
    // Auto-scroll for Tenders
    (function() {
        const tendersContainer = document.getElementById('tendersScrollContainer');
        let scrollInterval;
        let isPaused = false;

        function startAutoScroll() {
            scrollInterval = setInterval(() => {
                if (!isPaused && tendersContainer) {
                    // Scroll down by 1 pixel
                    tendersContainer.scrollTop += 1;

                    // Reset to top when reaching bottom
                    if (tendersContainer.scrollTop >= tendersContainer.scrollHeight - tendersContainer.clientHeight) {
                        setTimeout(() => {
                            tendersContainer.scrollTop = 0;
                        }, 2000); // Wait 2 seconds before resetting
                    }
                }
            }, 50); // Adjust speed (lower = faster)
        }

        // Pause on hover
        tendersContainer.addEventListener('mouseenter', () => {
            isPaused = true;
        });

        // Resume on mouse leave
        tendersContainer.addEventListener('mouseleave', () => {
            isPaused = false;
        });

        // Start auto-scroll
        startAutoScroll();
    })();
</script>
