<?php
	include ('shared.php');
    include ('eventList.php');
    // make database connection
?>
<HTML>
    <?php echo $HTMLHeader; ?>
<BODY>
    <?php echo $nav; ?>
	<main>
	    <div class='container'>
            <div class='row'>
                <div class='col-sm-12 col-md-12 col-lg-12'>
                    <h1 class='ghost-header-title2'>CHECK OUT THESE EVENTS</h1>
                    <p style='text-align:center;'>to achieve one or more distinguishes!!</p>
                    <nav class="flexboxContainer">
                        <div>
                            <div class="buttonBox"><a href="studentList.php">Check your information</a></div>
                        </div>
                    </nav>
                    <div class="flexboxContainer">
                        <?php echo $output ?>
                    </div>
                </div>
            </div>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-sm-12 col-md-6 col-lg-6'>
                    <div class="container-fluid2">
                        <h2 class="cta-twocolumn-title">Start Here</h2>
                            <p>1. What is your dream job?</p>
                            <p>2. What skills do you want to develop?</p>
                            <p>3. What types of experiences do you want to have?</p>
                            <p>4. What skills and experiences do successful people in your industry need?</p>
                    </div>
                </div>
                <div class='col-sm-12 col-md-6 col-lg-6'>
                    <div class="container-fluid">
                        <h2 class="rightrail-listing-title">Experiences Must...</h2>
                            <ol class="rightrail-listing-list">
                                <li>Engage you in one of the 5 distinguishing activity types (3 of 5 minimum requirement for distinction).
                                </li>
                                <li>Be a high impact experience that helps you develop useful and marketable skills.
                                </li>
                                <li>Happen while you are a student at UTA, even if the experiences are not all directly connected to university programs, courses, or resources.
                                </li>
                            </ol>
                    </div>
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
        <div class='container'>
            <div class='row'>
                <div class='col-sm-12 col-md-8 col-lg-8'>
                    <div class="container-fluid">
                        <h2 class="cta-accent-title">What is a high impact experience?</h2>
                        <p>We define a high impact experience as one that provides a higher level of learning and development, including real skill and personal development, opportunities to test new ideas, and the ability to apply lessons learned to future opportunities and endeavors. As you consider whether your experience is high impact, consider these factors:</p>
                        <ul>
                            <li>- Did you engage beyond a cursory, or surface level, with this experience?</li>
                            <li>- Were you challenged through the experience?</li>
                            <li>- Did you have an opportunity to get hands-on through the experience?</li>
                            <li>- Were you able to connect the dots between this activity and either real world application or how it will benefit you in the future?</li>
                        </ul>
                    
                    </div>
                </div>
                <div class='col-sm-12 col-md-4 col-lg-4'>
                    <div class="container-fluid2">
                        <h2 class="cta-accent-title">Experience Should...</h2>
                        <p>Experiences should benefit you in your own life and career goals. That’s it! Whether these experiences happen inside or outside of the classroom, on campus or off campus, the Maverick Advantage is about your learning journey and the meaningful experiences that help you toward your goals.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
                <div class="row">
                    <div class="col">
                        <h1 class='ghost-header-title2'>CHECK OUT THESE RESOURCES</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <article class="horizontal-listing-article" aria-label="Experimental Major Maps" style='margin-right:30px;'>
                        <h2 class="horizontal-listing-title">Experimental Major Maps</h2>
                        <p><span>This useful tool helps you to get the MOST out of your degree and university education. Each college developed a sequential course plan as well as a list of recommended experiences and possible career directions specific to every major. Find a map for your major and make this tool your best friend.&nbsp;</span></p>
                        <a href="https://www.uta.edu/student-success/major_maps" class="uta-btn uta-btn-compact-primary" rel="noopener noreferrer" target="_blank" title="Find Your Major Map">                                     <span>Find Your Major Map</span>
                        </a>                                
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="horizontal-listing-article" aria-label="List of Experimental Courses" style='margin-left:30px;'>
                        <h2 class="horizontal-listing-title">List of Experimental Courses </h2>
                        <p><span>The Maverick Advantage Faculty Engagement program provides a growing list of academic courses that include experimental learning and hands-on experiences. While there are experimental courses not on the list, the faculty who teach these courses intentionally build their course to support Maverick Advantage Distinction.</span></p>
                        <a href="https://www.uta.edu/student-success/major_maps" class="uta-btn uta-btn-compact-primary" rel="noopener noreferrer" target="_blank" title="Find a Course">                                                <span>Find a Course</span>
                        </a>                                
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="horizontal-listing-article" aria-label="Research Opportunities" style='margin-right:30px;'>
                        <h2 class="horizontal-listing-title">Research Opportunities</h2>
                        <p>Graduate students recieve lots of opportunities for research experience through their course work. We've included the undergraduate research landing page in the link above. Undergrads, you can also find research opportunities by connecting with your professors and asking about opportunities. Research methods courses may also count towards a distinguishing activity if you actively engage in the research process.&nbsp;</p>
                        <a href="https://www.uta.edu/research/opportunities/undergraduate-research" class="uta-btn uta-btn-compact-primary" rel="noopener noreferrer" target="_blank" title="Explore Research">                 <span>Explore Research</span>
                        </a>                                
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="horizontal-listing-article" aria-label="Engage in a club or organization " style='margin-left:30px;'>
                        <h2 class="horizontal-listing-title">Engage in a club or organization </h2>
                        <p><span>There are hundreds of club and organization opportunities at UTA where you can engage in leadership process, explore new ideas and <span style="font-size: 13px;">experiences</span>, invest in your community, and gain important skills, networking opportunities, and access to ideas and resources. Find an org that interests you on MavOrgs or sign up for a free consultation from the <a href="https://www.uta.edu/student-affairs/student-organizations/programs">Maverick Involvement Team</a> to find a good fit.</span></p>
                        <a href="https://mavorgs.uta.edu/" class="uta-btn uta-btn-compact-primary" title="Discover Mavorgs">    <span>Discover Mavorgs</span>
                        </a>
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="horizontal-listing-article" aria-label="Follett Student Leadership Center" style='margin-right:30px;'>
                        <h2 class="horizontal-listing-title">Follett Student Leadership Center</h2>
                        <p>Our leadership center works hard to provide you with awesome leadership and service opportunities, as well as to give you tools for your own skill building and leadership development.</p>
                        <span></span>
                        <a href="https://www.uta.edu/student-affairs/leadership" class="uta-btn uta-btn-compact-primary" title="Join the leadership center">                            <span>Join the leadership center</span>
                        </a>                                
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="horizontal-listing-article" aria-label="Career Development Center" style='margin-left:30px;'>
                        <h2 class="horizontal-listing-title">Career Development Center</h2>
                        <p><span>The Career Center is a powerhouse for helping you prepare for your career through skill building, interview and resume prep, mentor connections, job fairs, internship opportunities, and your connection to Handshake. The career resouses and opportunities provided through your college are also worth looking into.</span></p>
                        <a href="https://www.uta.edu/student-affairs/careers" class="uta-btn uta-btn-compact-primary" rel="noopener noreferrer" target="_blank" title="Career Development Center">                              <span>Career Development Center</span>
                        </a>                                </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="horizontal-listing-article" aria-label="Handshake" style='margin-right:30px;'>
                        <h2 class="horizontal-listing-title">Handshake</h2>
                        <span>This platform provides you with a forum to search for jobs, internships, and other invaluable opportunities. Register and explore today.</span><br>
                        <a href="https://uta.joinhandshake.com/stu" class="uta-btn uta-btn-compact-primary" title="Join Handshake" >                                                <span>Join Handshake</span>
                        </a>                                
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="horizontal-listing-article" aria-label="UTA Library and Fablab" style='margin-left:30px;'>
                        <h2 class="horizontal-listing-title">UTA Library and Fablab</h2>
                        <p><span>One of the top experimental libraries, including multiple studies, tech checkout system, and renowned fabrication laboratory, this is a place you'll want to invest your time during your tenure at UTA. All majors are encouraged to engage these spaces.&nbsp;</span></p>
                        <a href="https://libraries.uta.edu/services/fablab" class="uta-btn uta-btn-compact-primary" rel="noopener noreferrer" target="_blank" title="Explore the library and fablab">                   <span>Explore the library and fablab</span>
                        </a>                                
                        </article>
                    </div>
                    <div class="col-lg-6">
                        <article class="horizontal-listing-article" aria-label="Center for Entrepreneurship and Economic innovation" style='margin-right:30px;'>
                        <h2 class="horizontal-listing-title">Center for Entrepreneurship and Economic innovation</h2>
                        <p><span>The CEEI supports any student interested in exploring innovative practices or starting their own business&nbsp;venture. Your guest ideas don't need to wait.&nbsp;</span></p>
                        <a href="https://bhbinc.com/project/uta-center-for-entrepreneurship-and-economic-innovation-ceei/" class="uta-btn uta-btn-compact-primary" rel="noopener noreferrer" target="_blank" title="Start your business venture">                           <span>Start your business venture</span>
                        </a>                                
                    `   </article>
                    </div>
            </div>
        </div>
    </main>
	<?php echo $footer; ?>

</BODY>
</HTML>