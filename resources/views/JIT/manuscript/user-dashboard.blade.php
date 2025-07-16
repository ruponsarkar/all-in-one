@extends('layout') @section('title', 'Dashboard') @section('content')

<style>
    .paper-form2 {
        /* max-width: 700px; */
        margin: auto;
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
    }
</style>

<!-- Login Section -->
<div class="container mt-5">
    <div class="paper-form2">

        <ul class="nav nav-tabs" id="dashboard-tabs">
            <li class="nav-item">
                <button class="nav-link" data-page="profile" onClick="setPageParam('profile')">Profile</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-page="submission" onClick="setPageParam('submission')">Submit Manuscript</button>
            </li>
            <li class="nav-item">
                <button class="nav-link" data-page="articles" onClick="setPageParam('articles')">Your Articles</button>
            </li>
        </ul>
        



        <div id="submission-content">
            @include('JIT/manuscript/dashboard_pages/submission')
        </div>

        <div id="profile-content">
            @include('JIT/manuscript/dashboard_pages/profile')
        </div>

        <div id="your-articles-content">
            @include('JIT/manuscript/dashboard_pages/your-articles')
        </div>
    </div>
</div>




<script>
    function setPageParam(content) {
        const url = new URL(window.location.href);
        url.searchParams.set('page', content);
        window.history.pushState({}, '', url); // updates the URL without reload
        showPageContent(content); // Also update content immediately
    }

    function getQueryParam(param) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    function showPageContent(page) {
        // Hide all
        document.getElementById("submission-content").style.display = "none";
        document.getElementById("profile-content").style.display = "none";
        document.getElementById("your-articles-content").style.display = "none";

        // Show selected
        if (page === "submission") {
            document.getElementById("submission-content").style.display = "block";
        } else if (page === "profile") {
            document.getElementById("profile-content").style.display = "block";
        } else if (page === "articles") {
            document.getElementById("your-articles-content").style.display = "block";
        }

        // Update active tab
        const tabButtons = document.querySelectorAll('#dashboard-tabs .nav-link');
        tabButtons.forEach(btn => {
            if (btn.dataset.page === page) {
                btn.classList.add('active');
            } else {
                btn.classList.remove('active');
            }
        });
    }

    document.addEventListener("DOMContentLoaded", function() {
        const page = getQueryParam("page") || "submission"; // default to submission
        showPageContent(page);
    });
</script>


@endsection
