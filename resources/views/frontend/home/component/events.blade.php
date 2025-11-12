<!-- Events Slider (2 images per slide) with Unsplash photos -->
<div class="col-lg-6">
    <section class="events-component h-100">
        <div class="card-header-custom card-header-slider d-flex justify-content-between align-items-center">
            <h2 class="card-title-custom mb-0">Events</h2>
            <a href="#view-all-events" class="view-all-link ms-2">View All</a>
        </div>
        <div id="eventsCarousel" class="carousel slide pt-2" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row gx-2">
                        <div class="col-6">
                            <div class="d-flex flex-column align-items-center">
                                <img src="https://images.unsplash.com/photo-1517520287167-4bbf64a00d66?w=500&h=340&fit=crop"
                                     alt="Event 1"
                                     class="img-fluid mb-2" style="max-height:200px;">
                                <div class="text-center small fw-bold">Science Fair 2025<br>
                                    <span class="small text-muted">2025-10-12</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column align-items-center">
                                <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?w=500&h=340&fit=crop"
                                     alt="Event 2"
                                     class="img-fluid mb-2" style="max-height:200px;">
                                <div class="text-center small fw-bold">National Unity Day<br>
                                    <span class="small text-muted">2025-11-08</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row gx-2">
                        <div class="col-6">
                            <div class="d-flex flex-column align-items-center">
                                <img src="https://images.unsplash.com/photo-1517520287167-4bbf64a00d66?w=500&h=340&fit=crop"
                                     alt="Event 3"
                                     class="img-fluid mb-2" style="max-height:200px;">
                                <div class="text-center small fw-bold">Annual Sports Meet<br>
                                    <span class="small text-muted">2025-12-05</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column align-items-center">
                                <img src="https://images.unsplash.com/photo-1424746219973-8fe3bd07d8e3?w=500&h=340&fit=crop"
                                     alt="Event 4"
                                     class="img-fluid mb-2" style="max-height:200px;">
                                <div class="text-center small fw-bold">Health Awareness Camp<br>
                                    <span class="small text-muted">2025-09-18</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more carousel-item blocks for more events -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#eventsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#eventsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</div>

<style>
    .events-component {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        padding-bottom: 20px;
        min-height: 370px;
    }
    .card-header-slider {
        background: linear-gradient(135deg, #002855 0%, #003b7a 100%);
        color: white;
        padding: 15px 20px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    .card-title-custom {
        font-size: 1.5rem;
        margin: 0;
    }
    .view-all-link {
        color: #fff;
        text-decoration: underline;
        font-size: 1rem;
        font-weight: 500;
    }
    .carousel-inner img {
        object-fit: cover;
        border-radius: 6px;
        width: 100%;
    }
    @media (max-width: 991px) {
        .events-component {
            min-height: 280px;
        }
    }
    @media (max-width: 767px) {
        .events-component {
            min-height: 200px;
            margin-bottom: 1rem;
        }
        .carousel-item .col-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .carousel-item .row {
            flex-direction: column;
        }
    }
</style>
