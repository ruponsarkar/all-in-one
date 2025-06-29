@extends('layout') @section('title', 'Home') @section('content')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<div class="container ">

    <div class="row">


        <div class="my-2 col-md-9">
            <section id="hero">
                <div class="hero-container">
                    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                        <div class="carousel-inner rounded" role="listbox">

                            <!-- Slide 1 -->
                            <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
                                <div class="carousel-container">
                                    <div class="carousel-content">
                                        {{-- <h2 class="animate__animated animate__fadeInDown">Welcome to
                                    <span>UAS publisher</span>
                                </h2>
                                <p class="animate__animated animate__fadeInUp">Writing is a solitary
                                    endeavor,
                                    being an author is not
                                </p>
                                <a href=""
                                    class="btn-get-started animate__animated animate__fadeInUp">Read
                                    More
                                </a> --}}
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 2 -->
                            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
                                <div class="carousel-container">
                                    <div class="carousel-content">
                                        {{-- <h2 class="animate__animated fanimate__adeInDown">UAS
                                    <span>Publishers</span>
                                </h2>
                                <p class="animate__animated animate__fadeInUp">Silence is the death of a
                                    story
                                </p>
                                <a href=""
                                    class="btn-get-started animate__animated animate__fadeInUp">Read
                                    More
                                </a> --}}
                                    </div>
                                </div>
                            </div>

                            <!-- Slide 3 -->
                            <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
                                <div class="carousel-container">
                                    <div class="carousel-content">
                                        {{-- <h2 class="animate__animated animate__fadeInDown">UAS <span>Publishers
                                    </span></h2>
                                <p class="animate__animated animate__fadeInUp">lets you feed your inner
                                    control
                                    freak
                                </p>
                                <a href=""
                                    class="btn-get-started animate__animated animate__fadeInUp">Read
                                    More
                                </a> --}}
                                    </div>
                                </div>
                            </div>

                        </div>

                        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                        </a>

                        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                        </a>

                    </div>
                </div>
            </section>
        </div>


        <div class="col-md-3 d-flex justify-content-center align-items-center">
            <div class="">

                <h3 class="mb-0">
                    Universal Academic and Scientific Publisher
                </h3>

                <div>
                    The Journal of Antibiotic Development and Clinical Practice (JADCP) is an international,
                    peer-reviewed open-access journal dedicated to advancing knowledge and innovation in the field of
                    antibiotics and their clinical applications. The journal serves as a platform for researchers,
                    clinicians, and pharmaceutical scientists to publish high-quality, impactful research that drives
                    the discovery, development, and optimization of antibiotic therapies.
                </div>
            </div>

        </div>

    </div>



        <div class="row">
            <div class="col-md-4 p-3">
                <div class="rounded" style="background-color: #137e8a">
                    <div class="pt-4 mt-2 mb-4 d-flex flex-column align-items-center justify-content-between rounded">
                        <div>
                            <img class="px-5 animation-scheduled played"
                                src="https://services.brieflands.com/cdn/serve/31648/2abb967e64837dc75e478b98f4496c89840c5b07/brieflands-journal-managment-system.png"
                                alt="journal management system">
                        </div>
                        <h3 class="fs-5 mt-4 text-white text-center font-weight-bold">Journal Management System</h3>
                        <p class="bg-dark1 p-3 text-white bg-success mb-0 text-justify"
                            style="font-size:.9rem !important;word-break:auto-phrase;">Our
                            Journal Management System empowers publishers and editors to streamline the entire lifecycle
                            of academic journals. From manuscript submission to publication, we provide a comprehensive
                            platform with user-friendly tools, ensuring a smooth and efficient editorial process.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3">
                <div class="bg-success rounded">
                    <div class="pt-4 mt-2  mb-4 d-flex flex-column align-items-center justify-content-between rounded">
                        <div>
                            <img class="px-5 animation-scheduled played"
                                src="https://services.brieflands.com/cdn/serve/31648/46435de293bb7b636bedc747a1faa076f2d6cf4c/brieflands-publishing-services.png"
                                alt="Latest Publishing Services">
                        </div>
                        <h3 class="fs-5 mt-4 text-white text-center font-weight-bold">Latest Publishing Services</h3>
                        <p class="bg-dark1 p-3 text-white mb-0 text-justify"
                            style="font-size:.9rem !important; word-break:auto-phrase;">Our
                            We offer cutting-edge solutions to meet the evolving needs of authors and publishers. From
                            digital publishing to innovative distribution strategies, we keep you at the forefront of
                            the industry, facilitating successful and impactful publication journeys.

                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 p-3">
                <div class="rounded" style="background-color: #a5885b">
                    <div class="pt-4 mt-2 mb-4 d-flex flex-column align-items-center justify-content-between rounded">
                        <div>
                            <img class="px-5 animation-scheduled played"
                                src="https://services.brieflands.com/cdn/serve/31648/d9090c5c791eff82c65647d38af0001aa18b171b/brieflands-editing-services.png"
                                alt="Professional Technical Editing Services">
                        </div>
                        <h3 class="fs-5 mt-4 text-white text-center font-weight-bold">Professional Technical Editing
                            Services</h3>
                        <p class="bg-dark1 text-white p-3 mb-0 text-justify"
                            style="font-size:.9rem !important;word-break:auto-phrase;">
                            Enhance content quality with our expert Professional Technical Editing Services.
                            Specializing in refining technical documents, our experienced editors ensure clarity,
                            accuracy, and industry-standard compliance for research papers, reports, and technical
                            documents.
                        </p>
                    </div>
                </div>
            </div>

        </div>




        <div class="row">
            <div class="col-md-12">
                <div class="card1 p-3">
                    <h3>
                        About Us
                    </h3>
                    <div>
                        The Journal of Antibiotic Development and Clinical Practice (JADCP) is an international,
                        peer-reviewed open-access journal dedicated to advancing knowledge and innovation in the field
                        of
                        antibiotics and their clinical applications. The journal serves as a platform for researchers,
                        clinicians, and pharmaceutical scientists to publish high-quality, impactful research that
                        drives
                        the discovery, development, and optimization of antibiotic therapies.
                        <br />
                        <br />

                        The JADCP is committed to addressing the critical challenges in antibiotic resistance, emerging
                        infectious diseases, novel antibiotic discovery, and clinical applications, bridging the gap
                        between
                        bench-side research and bedside practice.
                    </div>

                </div>
            </div>

        </div>

        <div class="row my-3">
            <div class="col-md-4">
                <div class=" p-3 card1">
                    <h3>
                        Open Access Policy
                    </h3>
                    <div>
                        The Journal of Antibiotic Development and Clinical Practice operates as an open-access journal,
                        ensuring that all articles are freely available to the scientific and medical communities
                        worldwide, fostering accessibility and dissemination of knowledge.
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card1 p-3">
                    <h3>
                        Peer Review Process
                    </h3>
                    <div>
                        All submissions undergo a double-blind peer-review process to ensure the highest quality and
                        rigor in published content. Submissions are evaluated for scientific merit, originality,
                        clinical relevance, and methodological soundness.
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div class="card1 p-3">
                    <h3>
                        Manuscript Types
                    </h3>
                    <div>
                        The journal welcomes the following article types:
                    </div>
                    <div>
                        • Original Research Articles<br />
                        • Systematic Reviews and Meta-Analyses<br />
                        • Short Communications<br />
                        • Case Reports and Case Series<br />
                        • Clinical Guidelines and Perspectives<br />
                        • Letters to the Editor<br />
                    </div>
                </div>

            </div>

        </div>


        <div class="row">
            <div class="col-md-12 my-3">
                <div class="p-3 card1">
                    <h3>
                        Latest Articles
                    </h3>

                    <div>

                        <section id="indexing" class="indexing">

                            <div class="container">
                                <div class="latest-slider swiper">
                                    <div class="swiper-wrapper align-items-center">

                                        {{-- @foreach ($indexings as $data) --}}

                                        @foreach ($latestArticle as $key => $data)
                                            <div class="swiper-slide border rounded">
                                                <div class="p-3">
                                                    <div class=''> 
                                                        {{-- {{ $key + 1 }}. --}}
                                                        <strong>
                                                            {{ Str::limit($data->name, 70) }}
                                                        </strong>
                                                    </div>
                                                    <div>
                                                        <i class="bi bi-person-circle text-info"></i>
                                                        {{ Str::limit($data->aname, 30) }}
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        {{-- @endforeach --}}
                                    </div>
                                </div>

                            </div>
                        </section>

                    </div>
                </div>
            </div>
        </div>




        <div class="row">
            <div class="col-md-12 my-3">
                <div class="p-3 card1 rounded-pill">
                 

                    <div>
                        <div class="container" >
                            <div class="indexing-slider swiper">
                                <div class="swiper-wrapper align-items-center">

                                    @foreach ($indexings as $data)
                                        <div class="swiper-slide text-center">
                                            <img class="img-fluid"
                                                {{-- src="https://services.brieflands.com/cdn/serve/31648/dbc6c7a707f13c7f938b16b1229e4399d4ce15da/ithenticate.png" --}}
                                                src="{{ url('assets/indexing/img/' . $data->img) }}"
                                                alt="Image"
                                                style="width: 140px; object-fit: contain;">
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    


</div>


@endsection
