@extends('layout') @section('title', 'Home') @section('content')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>



<div class="">
    <!-- Page Content -->
    <div class="container my-4">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="journal-desc">
                    <h2 class="section-title">About the Journal</h2>
                    <p>
                        The <strong>Journal of Information Technology Education: IIP</strong> is an academically peer
                        refereed journal publishing the best innovative practices on using information technology in
                        education and the teaching of information technology. The focus is on innovations that have been
                        systematically tested in practice and are based on pedagogical principles. We look to publish
                        new ideas and innovations early, consequently the evidential support needed for the findings or
                        recommendations would not necessarily be that normally expected for rigorous, fully mature
                        research. For example, a critical review of the literature and some level of measurement might
                        suffice to make the argument. Such projects could include for example, pilot studies,
                        exploratory research or a case study of a single class.
                    </p>
                    <p>
                        JITE: IIP has resonance for a wider audience than most scholarly journals as we seek to include
                        educational practitioners, such as teachers and professional developers, in the debate on
                        innovative practices. Researchers looking for new and cutting edge innovations that require
                        further and more rigorous testing are also amongst our audience.
                    </p>
                    <p>
                        All manuscripts are submitted and reviewed electronically. Feedback to authors is rapid and
                        collegial. Our published authors have the advantage of the widespread readership that comes from
                        publishing all articles online within a few weeks of acceptance. This approach ensures that
                        JITE: Innovations articles are read and cited by the largest possible potential
                        audience…
                    </p>
                </div>

                <div class="mt-4 p-4 rounded" style="background-color: #eef6fb;">
                    <h3 class="section-title border-bottom pb-2" style="font-size: 1.75rem; font-weight: 600;">
                        <i class="fas fa-book-reader text-primary"></i> Recent Articles
                    </h3>
                    <div class="row mt-3">

                        @foreach ($latestArticle as $key => $data)
                        <div class="col-md-6 mb-4">
                            <div class="card h-100 shadow-sm border-0">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold"
                                        style="font-size: 1.1rem; line-height: 1.5;">
                                        <i class="fas fa-file-alt text-primary"></i> {{ Str::limit($data->name, 70) }}
                                    </h5>
                                    <p class="card-text text-muted mb-2">
                                        <i class="fas fa-user"></i>  {{ Str::limit($data->aname, 30) }}
                                    </p>
                                    <p class="card-text">
                                        <span class="badge badge-info p-2">
                                            <i class="fas fa-link"></i>
                                            <a href="/view/{{$data->slug}}"
                                                class="text-white text-decoration-none">
                                                {{ $data->doi }}
                                            </a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    
                    </div>
                </div>


            </div>

            <!-- Sidebar -->
            <div class="col-lg-4 sidebar mt-4 mt-lg-0">
                @include('common.sidebar')
            </div>
        </div>
    </div>
</div>


@endsection
