@extends('layouts.emp-template')

@section('content')
    <div class="create-job-main">
        <div class="wrapper">
            <div class="head-detail">
                <form action="{{ route('job.store') }}" method="POST">
                    @csrf
                    <div class="form-img">
                        <input type="file" class="file-img">
                    </div>
                    <div class="form-head">
                        <input type="text" placeholder="Enter Job Position.." name="job_position" id="job_position">
                        <input type="text" placeholder="Enter Company Name.." name="company_name" id="company_name">
                    </div>
                    <div class="col-btn-blue">
                        <button type="submit" class="btn-rounded-full bg-blue">Publish</button>
                    </div>
                    <section class="isi">
                        <div class="col-code">
                            <h3>Job Code</h3>
                            <input type="text" name="job_code" placeholder="Enter your job code..." required />
                        </div>
                        <div class="col-slug">
                            <h3>Job Slug</h3>
                            <input type="text" name="job_slug" placeholder="Enter your job slug..." required />
                        </div>
                        <div class="col-address">
                            <h3>Job Address</h3>
                            <input type="text" name="job_address" placeholder="Enter your job address..." required />
                        </div>
                        <div class="col-salary">
                            <h3>Job Salary</h3>
                            <input type="text" name="job_salary" placeholder="Enter your job salary..." required />
                        </div>
                        <div class="col-major">
                            <h3>Job Major</h3>
                            <input type="text" name="job_major" placeholder="Enter your job major..." required />
                        </div>
                        <div class="col-desc">
                            <h3>Job Description</h3>
                            <textarea rows="5" placeholder="Enter Job Description.." name="job_description" id="job_description"></textarea>
                        </div>
                        <div class="col-requirements">
                            <h3>Job Requirements</h3>
                                <fieldset class="inputs-set" id="job-req-list" class="input-field">
                                    <input class="input-field" type="text" name="job_requirements[]" placeholder="Enter your job requirements.." required />
                                </fieldset>
                                <button class="btn-add-input" onclick="addJobReqField()" type="">
                                    Add more <i class="fa-solid fa-plus"></i>
                                </button>

                            <script>
                                const myForm = document.getElementById("job-req-list");
                                        
                                function addJobReqField() {
                                    const newJobReqField = document.createElement("input");
                                    newJobReqField.type = "text";
                                    newJobReqField.name = "job_requirements[]";
                                    newJobReqField.placeholder = "Enter your job requirements..";
                                    newJobReqField.setAttribute("required", "");
                                    newJobReqField.classList.add("input-field");

                                    myForm.appendChild(newJobReqField);
                                }
                            </script>
                        </div>
                        <div class="col-type">
                            <h3>Job Type</h3>
                            <div class="radio-form">
                                <input type="radio" name="job_type" value="Part Time Job">
                                <label>Part Time Job</label>
                                <br >
                                <input type="radio" name="job_type" value="Full Time Job">
                                <label>Full Time Job</label>
                            </div>
                        </div>
                        <div class="col-spzl">
                            <h3>Job Specialization</h3>
                            <textarea rows="5" placeholder="Enter Job Specialization.." name="job_specialization" id="job_specialization"></textarea>
                        </div>
                    </section>
                </form>
            </div>
        </div>
    </div>
@endsection