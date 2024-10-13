<section class="book_section layout-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="confirmation.php" method="POST">
                    <h4>
                        BOOK <span>APPOINTMENT</span>
                    </h4>
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label for="patientNameInput">Patient Name</label>
                            <input type="text" id="patientNameInput" class="form-control" placeholder="" name="patient_name">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="doctorNameInput">Doctor's Name</label>
                            <select id="doctorNameInput" class="form-control wide" name="doctor_name">
                                <option value="Doctor A">Doctor A</option>
                                <option value="Doctor B">Doctor B</option>
                                <option value="Doctor C">Doctor C</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="departmentNameInput">Department's Name</label>
                            <select id="departmentNameInput" class="form-control wide" name="department_name">
                                <option value="Department A">Department A</option>
                                <option value="Department B">Department B</option>
                                <option value="Department C">Department C</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label for="phoneInput">Phone Number</label>
                            <input type="number" id="phoneInput" class="form-control" placeholder="XXXXXXXXXX" name="phone">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="symptomsInput">Symptoms</label>
                            <input type="text" id="symptomsInput" class="form-control" placeholder="" name="symptoms">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="dateInput">Choose Date</label>
                            <div class="input-group date" data-date-format="mm-dd-yyyy" id="dateInput">
                                <input type="text" class="form-control" name="appointment_date" readonly>
                                <span class="input-group-addon date_icon">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="btn">Submit Now</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
            </div>
        </div>
    </div>
</section>
