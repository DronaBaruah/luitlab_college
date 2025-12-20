<!-- About The College Component -->
<section class="about-college-component">
    <div class="about-card-wrapper">
        <div class="info-card about-card">
            <!-- Header -->
            <div class="card-header-custom card-header-about">
                <h3 class="card-title-custom">About The College</h3>
            </div>

            <!-- Content with Background -->
            <div class="card-content-custom about-content">
                <div class="about-text-overlay">
                    <p class="about-description">
                        Demo College, located at ...., Kamrup – Assam is an institute of general higher education.
                        This College was established in 1972 as a result of decades of the popular desire and relentless effort for
                        such an institute. The College fraternity as well as the locality at large is thankful to the Government of
                        Assam and their able guidance and leadership in the act of initiation of the College. Started with arts stream,
                        there are a total of 46 permanent teaching positions, additionally 25 guest faculty members being engaged in
                        the three faculties- Arts, Science and Vocational Courses, and in a few professional courses. Pub Kamrup
                        College, Baihata Chariali, though semi-urban in nature, is a busy centre of trade, academic activities, and
                        of communication. It is the junction point of two National Highways – 31 and 52. The Madan Kamdev Devalaya
                        (remnant of the 10th- 12th century shrine, now a Govt. recognized tourist spot) is at a distance of 3 kms
                        from the College...
                    </p>
                    <a href="#read-more-about" class="read-more-btn">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    /* About The College Component Styles */
    .about-college-component {
        padding: 20px 0;
    }

    .about-card-wrapper {
        max-width: 100%;
    }

    .card-header-about {
        background: linear-gradient(135deg, #17a2b8 0%, #138496 100%);
    }

    .about-content {
        background-image: url('college-watermark.png');
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        min-height: 500px;
    }

    .about-text-overlay {
        background: rgba(255, 255, 255, 0.95);
        padding: 20px;
        border-radius: 5px;
    }

    .about-description {
        font-size: 14px;
        line-height: 1.8;
        color: #333;
        text-align: justify;
        margin-bottom: 15px;
    }

    .read-more-btn {
        color: #003b7a;
        font-weight: 700;
        text-decoration: none;
        font-size: 15px;
        transition: color 0.3s;
    }

    .read-more-btn:hover {
        color: #dc3545;
        text-decoration: underline;
    }

    @media (max-width: 991px) {
        .about-content {
            min-height: 400px;
        }
    }

    @media (max-width: 576px) {
        .about-description {
            font-size: 13px;
        }
    }
</style>