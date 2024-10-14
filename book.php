
<?php include 'data.php' ?>


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
            <?php foreach ($doctors2 as $doctor): ?>
                <option value="<?php echo $doctor; ?>"><?php echo $doctor; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group col-lg-4">
        <label for="inputDepartmentName">Department's Name</label>
        <select name="department_name" class="form-control wide" id="inputDepartmentName">
            <?php foreach ($departments as $department): ?>
                <option value="<?php echo $department; ?>"><?php echo $department; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
                    <div class="form-row">
                        <div class="form-group col-lg-4">
                            <label for="inputPhone">Phone Number</label>
                            <input type="number" class="form-control" id="inputPhone" name="phone" placeholder="XXXXXXXXXX" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputSymptoms">Symptoms</label>
                            <input type="text" class="form-control" id="inputSymptoms" name="symptoms" placeholder="" required>
                        </div>
                        <div class="form-group col-lg-4">
                            <label for="inputDate">Choose Date</label>
                            <div class="input-group date" id="inputDate" data-date-format="mm-dd-yyyy">
                                <input type="text" class="form-control" name="appointment_date" readonly required>
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
