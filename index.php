<?php
	include ('shared.php');
?>
<!DOCTYPE HTML>
<HTML>
    <?php echo $HTMLHeader; ?>
<BODY>
    <?php echo $nav; ?>
	<main>
	    <div class='container'>
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='video'>
                        <video id="video-bg" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" poster="https://cdn.web.uta.edu/-/media/feature/hero/hero-default-bg.ashx?revision=612d96a2-0dd1-4c3f-b1ee-ae57afce0d44">
                        <source id="video-src" src="https://cdn.web.uta.edu/-/media/project/website/student-affairs/maverickadvantage/hero.ashx" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class='container' id="intro">
            <div class='row'>
                <div class='col-sm-12 col-md-12 col-lg-3'>
                    <div class='container'>
                        <a href='index.php'><img class='logo' src='images/logo.png' alt='Logo'/></a>
                    </div>
                </div>
                <div class='col-sm-12 col-md-12 col-lg-9' style='color:white;'>
                    <h1>Maverick Advantage</h1>
                    <p class='mav'>The Maverick Advantage Program at UTA is all about helping you build marketable skills and meaningful experiences through hands-on, high-impact opportunities. We challenge you to invest your time in 5 specific activities:
                        <ol class='mav'>
                            <li>Getting involved in the community</li>
                            <li>Building your career path and skillsets</li>
                            <li>Making global connections</li>
                            <li>Diving into research</li>
                            <li>Growing as a leader</li> 
                        </ol>
                    <p class='mav'>Every student, including you, should be able to graduate from UTA confident, career-ready, and clear about the person you want to be in the world. By participating in 3 of the 5 activity types while a UTA student, you will qualify to receive Maverick Advantage Distinction at graduation. In all practical terms, Maverick Advantage Distinction signifies your competitive edge in what’s on your resume, your career and life readiness, and your confidence articulating your professional story.
                    <p class='mav'>This opportunity is open to ALL students at UTA. Explore the 5 steps below as well as the <a href='what.php' class="btn btn-primary">Activities and Events</a> page to see how it works…</p>
                </div>
            </div>
        </div>
        <div class='container-main'>
            <div class='row'>
                <div class='col-sm-12 col-md-12 col-lg-12'>
                    <div class='container-steps'>    
                        <h1 class='ghost-header-title'>5 EASY STEPS TO MAVERICK ADVANTAGE</h1>
                    </div>
                </div>
                <div class='col-sm-12 col-md-4 col-lg-4'>
                    <div class='step-card'>
                        <h3>Experiential Major Map</h3>
                        <p>For your professional future as well as the skills you'll need.</p>
                        <a href="https://www.uta.edu/student-success/major_maps" class="btn btn-primary"><strong>EMM</strong></a>
                    </div>
                </div>
                <div class='col-sm-12 col-md-4 col-lg-4'>
                    <div class='step-card'>
                        <h3>5 Hands-on Activities</h3>
                        <p>Through at least 3 (of 5) qualifying, hands-on activities listed below.</p>
                        <a href="#activities" class="btn btn-primary"><strong>Activities</strong></a>
                    </div>
                </div>
                <div class='col-sm-12 col-md-4 col-lg-4'>
                    <div class='step-card'>
                        <h3>Showcase Your Experience</h3>
                        <p>In a portfolio, resume, or other professional tool relevant to your field.</p>
                        <a href="https://www.uta.edu/student-success/major_maps" class="btn btn-primary"><strong>Resume</strong></a>
                    </div>
                </div>
                <div class='col-sm-12 col-md-2 col-lg-2'>
                </div>
                <div class='col-sm-12 col-md-4 col-lg-4'>
                    <div class='step-card'>
                        <h3>Apply</h3>
                        <p>And participate in a practice interview during your graduating semester.</p>
                        <a href="https://www.uta.edu/student-success/major_maps" class="btn btn-primary"><strong>Apply</strong></a>
                    </div>
                </div>
                <div class='col-sm-12 col-md-4 col-lg-4'>
                    <div class='step-card'>
                        <h3>Graduate</h3>
                        <p>Proudly as a distinguished graduate with your Maverick Advantage stole.</p>
                        <a href="#activities" class="btn btn-primary"><strong>Graduate</strong></a>
                    </div>
                </div>
                <div class='col-sm-12 col-md-2 col-lg-2'>
                </div>
            </div>
        </div>
        <div class='container-main'>
            <div class='row'>
                <div class='col-sm-12 col-md-12 col-lg-12'>
                    <div class='container-steps' id='activities'>    
                        <h1 class='ghost-header-title2'>THE 5 ACTIVITIES ARE...</h1>
                    </div>
                </div>
                <div class='col-sm-12 col-md-4 col-lg-4'>
                    <article class="info-card" aria-label="Leadership Development" tabindex="0">
                    <div class="info-card-image">
                        <img src="https://cdn.web.uta.edu/-/media/project/website/student-affairs/maverickadvantage/mav-advantage-icon-leadership-dev.ashx?revision=b5c693c7-5d06-4511-8d39-aa5a71b6186a&amp;h=361&amp;w=500&amp;la=en&amp;hash=145EEF5A69438BBE3144086A2B34A70B" alt="Leadership Development">
                    </div>
                    <h3 class="info-card-title">Leadership Development</h3>
                    <div class="info-card-content">
                        Discover personal strengths and 
                        relationships that guide you on a journey to serve as
                        an effective leader.
                    </div>
                </div>
                <div class='col-sm-12 col-md-4 col-lg-4'>
                    <article class="info-card" aria-label="Undergraduate Research" tabindex="0">
                    <div class="info-card-image">
                        <img src="https://cdn.web.uta.edu/-/media/project/website/student-affairs/maverickadvantage/mav-advantage-icon-undergrad-research.ashx?revision=74ce3666-a096-44ad-9793-55f21ccdf54d&amp;h=361&amp;w=500&amp;la=en&amp;hash=F994A79D9E4E6AC812FFE102B72766A2" alt="Undergrad Research Icon">
                    </div>
                    <h3 class="info-card-title">Undergraduate Research</h3>
                    <div class="info-card-content">
                        Prepare for graduate school and apply knowledge in an environment outside the classroom.
                    </div>
                </div>
                <div class='col-sm-12 col-md-4 col-lg-4'>
                    <article class="info-card" aria-label="Community Engagement" tabindex="0">
                    <div class="info-card-image">
                        <img src="https://cdn.web.uta.edu/-/media/project/website/student-affairs/maverickadvantage/mav-advantage-icon-community-engagement.ashx?revision=b603ac95-45ab-4cb0-ab66-339d23190bf0&amp;h=361&amp;w=500&amp;la=en&amp;hash=6001D44A09B7096FE3267F4C33B21CCF" alt="Community engagement Icon">
                    </div>
                    <h3 class="info-card-title">Community Engagement</h3>
                    <div class="info-card-content">
                        Serve the community through engaging experiences and encouraging others to be civically engaged.
                    </div>
                </div>
                <div class='col-sm-12 col-md-2 col-lg-2'>
                </div>
                <div class='col-sm-12 col-md-4 col-lg-4'>
                    <article class="info-card" aria-label="Global Connections" tabindex="0">
                    <div class="info-card-image">
                        <img src="https://cdn.web.uta.edu/-/media/project/website/student-affairs/maverickadvantage/mav-advantage-icon-global-engagement.ashx?revision=5e15838f-c5a5-4936-af98-ce85aa092581&amp;h=361&amp;w=500&amp;la=en&amp;hash=C57DE5D28CBEBE6FEA2623E0134ECC79" alt="Global engagement Icon">
                    </div>
                    <h3 class="info-card-title">Global Connections</h3>
                    <div class="info-card-content">
                        Interact effectively with diverse audiences by bridging geographic, linguistic, and cultural barriers.
                    </div>
                </div>
                <div class='col-sm-12 col-md-4 col-lg-4'>
                    <article class="info-card" aria-label="Career Development" tabindex="0">
                    <div class="info-card-image">
                        <img src="https://cdn.web.uta.edu/-/media/project/website/student-affairs/maverickadvantage/mav-advantage-icon-career-dev.ashx?revision=07c449d1-56a1-4add-be2b-36ef9c9583f9&amp;h=361&amp;w=500&amp;la=en&amp;hash=652F160D33BAEEDD6CE8ECE08F078925" alt="Career development Icon">
                    </div>
                    <h3 class="info-card-title">Career Development</h3>
                    <div class="info-card-content">
                        Explore, engage, and develop through work that enables you to reach lifelong professional and personal success.
                    </div>
                </div>
                <div class='col-sm-12 col-md-2 col-lg-2'>
                </div>
            </div>
        </div>
        <div class='container' style='text-align:center'>
            <div class='row'>
                <div class='col-sm-12 col-md-12 col-lg-12'>
                        <a href='what.php' class='nav-link nav-link-callout'>Resources</a>
                </div>
            </div>
        </div>
        <div class="container">
            <header class="gd">
                    <h1 style="font-size:2.5rem;">Graduating Seniors, Apply Now</h1>
                    <h3>Apply now to earn Maverick Advantage</h3>
                    <a class='nav-link nav-link-callout' href='https://utaedu.questionpro.com/a/TakeSurvey?tt=BYILeA3qN6UECHrPeIW9eQ%3D%3D'>Apply
                    </a>
            </header>
        </div>
        
	</main>
	<?php echo $footer; ?>

</BODY>
</HTML>

