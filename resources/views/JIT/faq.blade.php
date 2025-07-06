@extends('layout') @section('title', 'FAQ') @section('content')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<div class="container my-4">
    <div class="row">
        <div class="col-lg-8">

            <div class="journal-desc">

                <div>
                    <div class="row justify-content-center p-3">
                        <div class="col-lg-12 details text-center p-2">
                            <h3>FAQ</h3>
                        </div>

                        <h2>DOAJ Principles of Transparency</h2>
                        <ul>
                            <li><strong>Peer review process:</strong> Each journal specifies its review process. In general, all submissions are first reviewed by the Editor-in-Chief and successful submissions are blind reviewed by an ad hoc review committee consisting of four or more external reviewers and an Editor.</li>

                            <li><strong>Governing Body:</strong> The full names and affiliations of organization’s governing body are provided on the journal's Web site.</li>

                            <li><strong>Editorial team/contact information:</strong> Journals provide the full names and affiliations of the journal's editors and reviewers on the journal's Web site as well as contact information for the editorial office.</li>

                            <li><strong>Author fees:</strong> There are no fees for reviewing. ISI members pay no fee publication.</li>

                            <li><strong>Creative Commons License:</strong> Licensing information is clearly described on each journal's Web site. ISI’s journals publications are now published under the CC BY-NC 4.0 license:
                                <br><br>
                                (CC BY-NC 4.0) This article is licensed to you under a <a href="https://creativecommons.org/licenses/by-nc/4.0/"> Creative Commons Attribution-NonCommercial 4.0 International License</a>. When you copy and redistribute this paper in full or in part, you need to provide proper attribution to it to ensure that others can later locate this work (and to ensure that others do not accuse you of plagiarism). You may (and we encourage you to) adapt, remix, transform, and build upon the material for any non-commercial purposes. This license does not permit you to use this material for commercial purposes.
                            </li>

                            <li><strong>Process for identification of and dealing with allegations of research misconduct:</strong> The Informing Science Institute policies are shown at <a href="http://www.informingscience.org/Pages/EthicsPolicy" target="_blank">http://www.informingscience.org/Pages/EthicsPolicy</a>.</li>

                            <li><strong>Ownership and management:</strong> Journals identified as Informing Science Institute journals are managed by ISI. Partner journals show their ownership and management.</li>

                            <li><strong>Web site:</strong> Our journal's Web site, including the text that it contains, demonstrate that care has been taken to ensure high ethical and professional standards. It does not contain misleading information, including any attempt to mimic another journal/publisher's site.</li>

                            <li><strong>Name of journal:</strong> The Journal name shall be unique and not be one that is easily confused with another journal or that might mislead potential authors and readers about the Journal's origin or association with other journals.</li>

                            <li><strong>Conflicts of interest:</strong> Our policy regarding conflict of interest is shown at <a href="http://www.informingscience.org/Pages/EthicsPolicy" target="_blank">http://www.informingscience.org/Pages/EthicsPolicy</a>.</li>

                            <li><strong>Access:</strong> ISI journals require no subscription and are accessible without fee. Printed copies are available for sale on <a href="http://Amazon.com" target="_blank">Amazon.com</a> and <a href="http://ISPress.org" target="_blank">ISPress.org</a>.</li>

                            <li><strong>Revenue sources:</strong> ISI receives support via its membership and institutional sponsorships.</li>

                            <li><strong>Advertising:</strong> At present ISI does not accept advertising within its journal. Institutional support is acknowledged.</li>

                            <li><strong>Publishing schedule:</strong> Papers are published online as accepted and in paper format at least once a year.</li>

                            <li><strong>Archiving:</strong> Our journals are archived internally.</li>

                            <li><strong>Direct marketing:</strong> Any direct marketing activities, including solicitation of manuscripts that are conducted on behalf of the journal, are appropriate, well targeted, and unobtrusive.</li>
                        </ul>

                        <p><strong>What is the difference between an ISI Colleague and an ISI Member?</strong><br>
                            An ISI Colleague is an individual with a free ISI account allowing them to be part of the ISI community and support ISI by submitting and reviewing articles, for example. An ISI Member is an individual who has paid the annual membership fee and receives multiple benefits in return.</p>

                        <p><strong>What benefits do I receive as an ISI Member?</strong><br>
                            A list of benefits you will receive as an ISI Member can be found here.</p>

                        <p><strong>Do I have to be an ISI Member to submit an article to an ISI journal?</strong><br>
                            No, anyone can submit an article to any ISI journal for review. To do so, you need to register for an ISI Colleague account, free of charge.</p>

                        <p><strong>How long does my ISI membership last?</strong><br>
                            Memberships begin on the day you paid for membership. The duration of membership depends on the membership fee paid, from one year to lifetime.</p>

                        <p><strong>How will I know when my annual membership is going to expire?</strong><br>
                            This information can always be found in your profile and of course, we will remind you!</p>


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