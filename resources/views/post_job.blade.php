@extends('layouts.app')

@section('content')
    <!-- HOME -->
    <section style="margin-top: -24px" class="section-hero overlay inner-page bg-image"
        style="background-image: url('images/hero_1.jpg');" id="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <h1 class="text-white font-weight-bold">Post A Job</h1>
                    <div class="custom-breadcrumbs">
                        <a href="#">Home</a> <span class="mx-2 slash">/</span>
                        <a href="#">Job</a> <span class="mx-2 slash">/</span>
                        <span class="text-white"><strong>Post a Job</strong></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- post a job -->
    <section class="site-section">
        <div class="container">

            <div class="row align-items-center mb-5">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="d-flex align-items-center">
                        <div>
                            <h2>Post A Job</h2>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mb-5">
                <div class="col-lg-12">
                    <form class="p-4 p-md-5 border rounded" action="post-job.php" method="post">

                        <!--job details-->

                        <div class="form-group">
                            <label for="job-title">Job Title</label>
                            <input type="text" name="job_title" class="form-control" id="job-title"
                                placeholder="Product Designer">
                        </div>


                        <div class="form-group">
                            <label for="job-region">Job Region</label>
                            <select name="job_region" class="selectpicker border rounded" id="job-region"
                                data-style="btn-black" data-width="100%" data-live-search="true" title="Select Region">
                                <option>Anywhere</option>
                                <option>San Francisco</option>
                                <option>Palo Alto</option>
                                <option>New York</option>
                                <option>Manhattan</option>
                                <option>Ontario</option>
                                <option>Toronto</option>
                                <option>Kansas</option>
                                <option>Mountain View</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="job-type">Job Type</label>
                            <select name="job_type" class="selectpicker border rounded" id="job-type"
                                data-style="btn-black" data-width="100%" data-live-search="true" title="Select Job Type">
                                <option>Part Time</option>
                                <option>Full Time</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="job-location">Vacancy</label>
                            <input name="vacancy" type="text" class="form-control" id="job-location"
                                placeholder="e.g. 3">
                        </div>
                        <div class="form-group">
                            <label for="job-type">Experience</label>
                            <select name="experience" class="selectpicker border rounded" id="job-type"
                                data-style="btn-black" data-width="100%" data-live-search="true"
                                title="Select Years of Experience">
                                <option>1-3 years</option>
                                <option>3-6 years</option>
                                <option>6-9 years</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="job-type">Salary</label>
                            <select name="salary" class="selectpicker border rounded" id="job-type" data-style="btn-black"
                                data-width="100%" data-live-search="true" title="Select Salary">
                                <option>$50k - $70k</option>
                                <option>$70k - $100k</option>
                                <option>$100k - $150k</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="job-type">Gender</label>
                            <select name="gender" class="selectpicker border rounded" id="" data-style="btn-black"
                                data-width="100%" data-live-search="true" title="Select Gender">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Any</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="job-location">Application Deadline</label>
                            <input name="application_deadline" type="text" class="form-control" id=""
                                placeholder="e.g. 20-12-2022">
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="">Job Description</label>
                                <textarea name="job_description" id="" cols="30" rows="7" class="form-control"
                                    placeholder="Write Job Description..."></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="">Responsibilities</label>
                                <textarea name="responsibilities" id="" cols="30" rows="7" class="form-control"
                                    placeholder="Write Responsibilities..."></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="">Education & Experience</label>
                                <textarea name="education_experience" id="" cols="30" rows="7" class="form-control"
                                    placeholder="Write Education & Experience..."></textarea>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="text-black" for="">Other Benifits</label>
                                <textarea name="other_benifits" id="" cols="30" rows="7" class="form-control"
                                    placeholder="Write Other Benifits..."></textarea>
                            </div>
                        </div>

                        <!--company details-->


                        <div class="form-group">
                            <input type="hidden" name="company_email" class="form-control" id=""
                                placeholder="Company Email">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="company_name" class="form-control" id=""
                                placeholder="Company Name">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="company_id" class="form-control" id=""
                                placeholder="Company ID">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="company_image" class="form-control" id=""
                                placeholder="Company Image">
                        </div>


                        <div class="form-group">
                            <div class="row">
                                <div class="col-6">
                                    <input type="submit" name="submit" class="btn btn-block btn-primary btn-md"
                                        style="margin-left: 200px" value="Save Job">
                                </div>
                            </div>
                        </div>


                    </form>
                </div>


            </div>

        </div>
    </section>

    <!-- Footer -->
    <footer style="margin-bottom: -24px" class="site-footer">

        <a href="#top" class="smoothscroll scroll-top">
            <span class="icon-keyboard_arrow_up"></span>
        </a>

        <div class="container">
            <div class="row mb-5">
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Search Trending</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Web Developers</a></li>
                        <li><a href="#">Python</a></li>
                        <li><a href="#">HTML5</a></li>
                        <li><a href="#">CSS3</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Company</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Resources</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Support</h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Support</a></li>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <h3>Contact Us</h3>
                    <div class="footer-social">
                        <a href="#"><span class="icon-facebook"></span></a>
                        <a href="#"><span class="icon-twitter"></span></a>
                        <a href="#"><span class="icon-instagram"></span></a>
                        <a href="#"><span class="icon-linkedin"></span></a>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-12">
                    <p class="copyright"><small>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template is made with <i
                                class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>. Downloaded from <a href="https://themeslab.org/"
                                target="_blank">Themeslab</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </small></p>
                </div>
            </div>
        </div>
    </footer>
@endsection
