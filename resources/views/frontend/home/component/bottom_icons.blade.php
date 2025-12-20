<!-- Bottom Icons Component -->
<section class="bottom-icons-component py-4">
    <div class="container-fluid px-lg-5">
        <div class="row g-3">
            <!-- NIRF -->
            <div class="col-lg-3 col-md-6 col-6">
                <a href="#nirf" class="icon-card-link">
                    <div class="icon-card text-center">
                        <div class="icon-wrapper">
                            <img src="https://www.pubkamrupcollege.co.in/images/nirf.png" alt="NIRF" class="icon-img">
                        </div>
                        <h5 class="icon-title">NIRF</h5>
                    </div>
                </a>
            </div>

            <!-- NSS -->
            <div class="col-lg-3 col-md-6 col-6">
                <a href="#nss" class="icon-card-link">
                    <div class="icon-card text-center">
                        <div class="icon-wrapper">
                            <img src="https://www.pubkamrupcollege.co.in/images/nss.png" alt="NSS" class="icon-img">
                        </div>
                        <h5 class="icon-title">NSS</h5>
                    </div>
                </a>
            </div>

            <!-- Learning Management System -->
            <div class="col-lg-3 col-md-6 col-6">
                <a href="#lms" class="icon-card-link">
                    <div class="icon-card text-center">
                        <div class="icon-wrapper">
                            <img src="https://luitlab.com/_next/image?url=%2FLuitlab_logo_final.png&w=128&q=75" alt="Learning Management System" class="icon-img">
                        </div>
                        <h5 class="icon-title">Learning Management System</h5>
                    </div>
                </a>
            </div>

            <!-- Quill: the mighty pen -->
            <div class="col-lg-3 col-md-6 col-6">
                <a href="#quill" class="icon-card-link">
                    <div class="icon-card text-center">
                        <div class="icon-wrapper">
                            <img src="https://luitlab.com/_next/image?url=%2FLuitlab_logo_final.png&w=128&q=75" alt="Quill: the mighty pen" class="icon-img">
                        </div>
                        <h5 class="icon-title">Quill: the mighty pen</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Bottom Icons Component Styles */
    .bottom-icons-component {
        background-color: #f8f9fa;
        border-top: 3px solid #ffc107;
    }

    .icon-card-link {
        text-decoration: none;
        color: inherit;
    }

    .icon-card {
        background: white;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.08);
        transition: all 0.3s ease;
        height: 100%;
    }

    .icon-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
    }

    .icon-wrapper {
        margin-bottom: 15px;
    }

    .icon-img {
        max-width: 100px;
        height: auto;
        transition: transform 0.3s;
    }

    .icon-card:hover .icon-img {
        transform: scale(1.1);
    }

    .icon-title {
        font-size: 16px;
        font-weight: 600;
        color: #002855;
        margin: 0;
    }

    @media (max-width: 576px) {
        .icon-title {
            font-size: 13px;
        }

        .icon-img {
            max-width: 70px;
        }
    }
</style>
