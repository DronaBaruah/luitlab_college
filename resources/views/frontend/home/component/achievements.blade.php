<!-- Achievements Slider (2 images per slide) with free Unsplash images -->
<div class="col-lg-6">
    <section class="achievements-component h-100">
        <div class="card-header-custom card-header-slider d-flex justify-content-between align-items-center">
            <h2 class="card-title-custom mb-0">Achievements</h2>
            <a href="#view-all-achievements" class="view-all-link ms-2">View All</a>
        </div>
        <div id="achievementsCarousel" class="carousel slide pt-2" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row gx-2">
                        <div class="col-6">
                            <div class="d-flex flex-column align-items-center">
                                <img src="https://images.unsplash.com/photo-1519125323398-675f0ddb6308?w=500&h=340&fit=crop"
                                     alt="Achievement 1"
                                     class="img-fluid mb-2" style="max-height:200px;">
                                <p class="mt-2 text-center small">Best College Award 2024</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column align-items-center">
                                <img src="https://images.unsplash.com/photo-1465101162946-4377e57745c3?w=500&h=340&fit=crop"
                                     alt="Achievement 2"
                                     class="img-fluid mb-2" style="max-height:200px;">
                                <p class="mt-2 text-center small">National Youth Festival Completion</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row gx-2">
                        <div class="col-6">
                            <div class="d-flex flex-column align-items-center">
                                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=500&h=340&fit=crop"
                                     alt="Achievement 3"
                                     class="img-fluid mb-2" style="max-height:200px;">
                                <p class="mt-2 text-center small">Collaboration with University, 2025</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex flex-column align-items-center">
                                <img src="https://images.unsplash.com/photo-1517520287167-4bbf64a00d66?w=500&h=340&fit=crop"
                                     alt="Achievement 4"
                                     class="img-fluid mb-2" style="max-height:200px;">
                                <p class="mt-2 text-center small">Best Social Initiative Award</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more carousel-item blocks for more slides -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#achievementsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#achievementsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</div>

<style>
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
    .achievements-component {
        background: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        padding-bottom: 20px;
        min-height: 370px;
    }
    .carousel-inner img {
        object-fit: cover;
        border-radius: 6px;
        width: 100%;
    }
    @media (max-width: 991px) {
        .achievements-component {
            min-height: 280px;
        }
    }
    @media (max-width: 767px) {
        .achievements-component {
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
