<!-- Anti-Ragging Notice Component -->
<section class="anti-ragging-component">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="anti-ragging-notice text-center py-2">
                    <a href="#anti-ragging-form" class="btn-click-here">Click Here</a>
                    <span class="notice-text">to fill the online "Anti-ragging affidavit" form</span>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* Anti-Ragging Component Styles */
    .anti-ragging-component {
        background-color: #f8f9fa;
        border-bottom: 2px solid #dee2e6;
    }

    .anti-ragging-notice {
        font-size: 16px;
        font-weight: 500;
    }

    .btn-click-here {
        background-color: #dc3545;
        color: white;
        padding: 5px 20px;
        border-radius: 5px;
        text-decoration: none;
        font-weight: 600;
        transition: background-color 0.3s;
        display: inline-block;
        margin-right: 10px;
    }

    .btn-click-here:hover {
        background-color: #c82333;
        color: white;
    }

    .notice-text {
        color: #333;
    }

    @media (max-width: 576px) {
        .btn-click-here {
            font-size: 14px;
            padding: 4px 15px;
        }

        .notice-text {
            font-size: 14px;
            display: block;
            margin-top: 5px;
        }
    }
</style>
