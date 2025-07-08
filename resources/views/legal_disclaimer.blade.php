@extends('layout') @section('title', 'Legal Disclaimer') @section('content')
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<div class="container my-4">
    <div class="row">
        <div class="col-lg-8">

            <div class="journal-desc">

                <div>
                    <div class="row justify-content-center py-3">

                        <div class="col-lg-12 details text-center p-2">
                            <h1>Legal Disclaimer</h1>
                        </div>

                        <div class="col-lg-12 py-3">
                            <div class="container my-5">
                                <h2>Disclaimer of Warranties and Liability</h2>

                                <p>
                                    Neither Informing Science Institute nor its suppliers or licensors makes any warranty (including without limitation) of its Site that:
                                </p>
                                <ul>
                                    <li>It will be uninterrupted or error-free;</li>
                                    <li>Defects will be corrected;</li>
                                    <li>It is free of viruses or other harmful components;</li>
                                    <li>It is accurate, complete, reliable, available, and suitable;</li>
                                    <li>Of its quality, non-infringement, operation or result obtained from the use of its content.</li>
                                </ul>

                                <p>
                                    <strong>THE SITE AND ALL ITS CONTENT, PRODUCTS AND SERVICES AS WELL AS THOSE ACCESSIBLE FROM THE SITE ARE PROVIDED "AS IS" AND WITHOUT WARRANTIES OR REPRESENTATIONS OF ANY KIND, ALL OF WHICH THE INFORMING SCIENCE INSTITUTE DISCLAIMS TO THE FULLEST EXTENT PERMITTED BY LAW.</strong>
                                </p>

                                <p>
                                    <strong>THE USE OF THE INFORMING SCIENCE INSTITUTE WEBSITE AND ITS CONTENT, IS AT YOUR SOLE RISK.</strong>
                                </p>

                                <p>
                                    To the extent permitted under applicable law, no responsibility is assumed for any injury and/or damage to anything animate and inanimate from any use or operation of any ideas, instructions, methods, products or procedures contained in the Informing Science Institute WebSite.
                                </p>

                                <p>
                                    The Informing Science Institute does not claim ownership, endorse or take responsibility for any third-party products, information, guidelines, materials or services that may be offered, advertised, provided or displayed on the Site.
                                </p>

                                <h2>Indemnification</h2>

                                <p>
                                    You hereby agree to indemnify and hold the Informing Science Institute, its directors, officers, shareholders, predecessors, successors in interest, employees, agents, suppliers and licensors harmless from and against any and all third-party claims of liability, losses, damages and costs, including, without limitation, reasonable attorneys' fees, arising out of or in connection with your use of or inability to use the Site or its Content, products or services.
                                </p>

                                <h2>Compliance</h2>

                                <p>
                                    You agree to comply with all relevant local, state, national and international laws, statutes, ordinances and regulations that apply to your use of the Site and its Content, products and services.
                                </p>

                                <p>
                                    You represent and warrant that:
                                </p>
                                <ul>
                                    <li>You are not located in a country that is subject to a U.S. Government embargo, or that has been designated by the U.S. Government as a “terrorist supporting” country;</li>
                                    <li>You are not listed on any U.S. Government list of prohibited or restricted parties.</li>
                                </ul>

                                <h2>Governing Law and Venue</h2>

                                <p>
                                    All matters relating to your access to or use of the Site, including all disputes, shall be governed by and construed in accordance with the laws of the State of California, USA, without regard to its conflicts of law principles, except if you reside outside of the United States, then the laws of the country in the region where you reside.
                                </p>

                                <p>
                                    The exclusive jurisdiction and venue with respect to any action or suit arising out of or pertaining to the subject matter hereof shall be the courts of competent jurisdiction located in the State of California, USA, except if you reside outside of the United States, then the courts located in the country of the region where you reside.
                                </p>

                                <p>
                                    Any claim arising out of or in connection with your use of or inability to use the Site or its Content, products or services must be brought within one (1) year after the event or such claim is barred.
                                </p>

                            </div>

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