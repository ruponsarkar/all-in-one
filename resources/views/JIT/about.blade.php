@extends('layout') @section('title', 'About us') @section('content')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<div class="container my-4">
    <div class="row">
        <div class="col-lg-8">

            <div class="journal-desc">

                <div>
                    <div class="row justify-content-center p-3">
                        <div class="col-lg-12 details text-center p-2">
                            <h3>About us </h3>
                        </div>

                        <div>
                            The <b> Journal of Information Technology Education: Innovations in Practice (JITE: Innovations or JITE: IIP) </b> is an academically peer refereed journal publishing the best innovative practices on using information technology in education and the teaching of information technology. The focus is on innovations that have been systematically tested in practice and are based on pedagogical principles. We look to publish new ideas and innovations early, consequently the evidential support needed for the findings or recommendations would not necessarily be that normally expected for rigorous, fully mature research. For example, a critical review of the literature and some level of measurement might suffice to make the argument. Such projects could include for example, pilot studies, exploratory research or a case study of a single class.

                        </div>

                        <div>
                            JITE: IIP has resonance for a wider audience than most scholarly journals as we seek to include educational practitioners, such as teachers and professional developers, in the debate on innovative practices. Researchers looking for new and cutting edge innovations that require further and more rigorous testing are also amongst our audience.
                        </div>

                        <div>
                            All manuscripts are submitted and reviewed electronically. Feedback to authors is rapid and collegial. Our published authors have the advantage of the widespread readership that comes from publishing all articles online within a few weeks of acceptance. This approach ensures that JITE: Innovations articles are read and cited by the largest possible potential audience.
                        </div>



                    </div>



                    <div class="row justify-content-center p-3">
                        <div class="col-lg-12 details text-center p-2">
                            <h3>Mission</h3>
                        </div>

                        <div>
                            The mission of the Journal of Information Technology Education: Innovations is to give our readers early notification of new and exciting developments in the use of information technology in educational practice. We achieve this by:

                        </div>

                        <div>
                            Publishing innovative, cutting edge practices early, often before generalizable studies become available.
                        </div>

                        <div>
                            Exposing the reader to a diverse range of mindsets, emerging views and unique tactics. Giving useful, timely feedback on submissions through a rigorous review process that is one of collegial mentoring.
                        </div>

                        <div>
                            Being a flagship for new and emerging innovations in educational information technology.Acknowledging and embracing the diversity of teaching and learning models in use around the world
                        </div>
                        <div>
                            We have placed a copy of the Informing Science Institute Policy on Professional Ethics
                        </div>



                    </div>


                </div>


            </div>

        </div>

        <!-- Sidebar -->
        <div class="col-lg-4 sidebar mt-4 mt-lg-0">
            @include('common.sidebar')
        </div>
    </div>


</div>



@endsection
