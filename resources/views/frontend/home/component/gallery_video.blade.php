<div class="container-fluid py-4">
    <div class="row g-3">
        <!-- Gallery Section -->
        <div class="col-lg-9">
            <div class="gallery-component bg-white rounded shadow-sm p-3 h-100">
                <div class="card-header-custom card-header-slider mb-3">
                    <h2 class="card-title-custom text-center mb-0">Gallery</h2>
                </div>
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                    <!-- Gallery Images: replace src with your URLs or use Unsplash/Pexels -->
                    <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?w=400&h=220&fit=crop"
                         class="img-fluid gallery-img" alt="Gallery 1" style="max-width:32%; border-radius:8px; height:180px; object-fit:cover;">
                    <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?w=400&h=220&fit=crop"
                         class="img-fluid gallery-img" alt="Gallery 2" style="max-width:32%; border-radius:8px; height:180px; object-fit:cover;">
                    <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b?w=400&h=220&fit=crop"
                         class="img-fluid gallery-img" alt="Gallery 3" style="max-width:32%; border-radius:8px; height:180px; object-fit:cover;">
                </div>
                <div class="d-flex justify-content-end mt-2">
                    <a href="#" class="btn btn-warning fw-bold px-4 rounded-3">View Gallery</a>
                </div>
            </div>
        </div>
        <!-- Videos Section -->
        <div class="col-lg-3">
            <div class="videos-component bg-white rounded shadow-sm p-3 h-100 d-flex flex-column justify-content-between">
                <div class="card-header-custom card-header-slider mb-3">
                    <h2 class="card-title-custom text-center mb-0">Videos</h2>
                </div>
                <div class="d-flex align-items-center justify-content-center" style="min-height:170px;">
                    <!-- Video thumbnail or YouTube embed -->
                    <a href="#" style="display:block;">
                        <img src="https://images.unsplash.com/photo-1464983953574-0892a716854b"
                             class="img-fluid"
                             alt="YouTube Video"
                             style="width:190%; max-width:270px; border-radius:8px; box-shadow:0 2px 8px rgba(0,0,0,0.08);">
                    </a>
                </div>
                <div class="d-flex justify-content-end mt-2">
                    <a href="#" class="btn btn-warning fw-bold px-4 rounded-3">More Videos</a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card-header-slider {
        background: linear-gradient(135deg, #002855 0%, #003b7a 100%);
        color: white;
        padding: 12px 10px;
        border-radius: 8px 8px 0 0;
    }
    .card-title-custom {
        font-size: 1.7rem;
        margin: 0;
    }
    .gallery-img {
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        transition: transform 0.2s;
    }
    .gallery-img:hover {
        transform: scale(1.03);
        box-shadow: 0 6px 16px rgba(0,0,0,0.12);
    }
    @media (max-width: 991px) {
        .gallery-img { max-width: 49%; margin-bottom: 10px; }
        .col-lg-9, .col-lg-3 { flex: 0 0 100%; max-width: 100%; }
    }
    @media (max-width: 575px) {
        .gallery-img { max-width: 100%; margin-bottom: 12px; height:130px;}
        .card-title-custom { font-size: 1.15rem; }
        .btn { padding: 4px 10px; font-size: 0.97rem;}
    }
</style>
