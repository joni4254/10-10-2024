<section class="book_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="confirmation.php" method="POST">
                    <h4>
                        BOOK <span>APPOINTMENT</span>
                    </h4>
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label for="inputPatientName">Patient Name</label>
                            <input type="text" class="form-control" id="inputPatientName" name="patient_name" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDoctorName">Doctor's Name</label>
                            <select name="doctor_name" class="form-control wide" id="inputDoctorName">
                                <option value="Doctor A">Doctor A</option>
                                <option value="Doctor B">Doctor B</option>
                                <option value="Doctor C">Doctor C</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDepartmentName">Department's Name</label>
                            <select name="department_name" class="form-control wide" id="inputDepartmentName">
                                <option value="Department A">Department A</option>
                                <option value="Department B">Department B</option>
                                <option value="Department C">Department C</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label for="inputPhone">Phone Number</label>
                            <input type="number" class="form-control" id="inputPhone" name="phone" placeholder="XXXXXXXXXX">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputSymptoms">Symptoms</label>
                            <input type="text" class="form-control" id="inputSymptoms" name="symptoms" placeholder="">
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDate">Choose Date</label>
                            <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
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
