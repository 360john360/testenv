<?php
include('db_connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $cohort = mysqli_real_escape_string($conn, $_POST['cohort']);
    $esr_number = mysqli_real_escape_string($conn, $_POST['esr_number']);
    $sex = mysqli_real_escape_string($conn, $_POST['sex']);
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone_number = mysqli_real_escape_string($conn, $_POST['phone_number']);
    $address_1 = mysqli_real_escape_string($conn, $_POST['address_1']);
    $address_2 = mysqli_real_escape_string($conn, $_POST['address_2']);
    $address_3 = mysqli_real_escape_string($conn, $_POST['address_3']);
    $postcode = mysqli_real_escape_string($conn, $_POST['postcode']);
    $attachments = mysqli_real_escape_string($conn, $_POST['attachments']);
    $notes = mysqli_real_escape_string($conn, $_POST['notes']);
    $nmc_pin = mysqli_real_escape_string($conn, $_POST['nmc_pin']);
    $date_nmc_pin_obtained = mysqli_real_escape_string($conn, $_POST['date_nmc_pin_obtained']);
    $prn_number = mysqli_real_escape_string($conn, $_POST['prn_number']);
    $hospital = mysqli_real_escape_string($conn, $_POST['hospital']);
    $ward = mysqli_real_escape_string($conn, $_POST['ward']);
    $cost_centre = mysqli_real_escape_string($conn, $_POST['cost_centre']);
    $band_4_position_number = mysqli_real_escape_string($conn, $_POST['band_4_position_number']);
    $manager_name = mysqli_real_escape_string($conn, $_POST['managers_name']);
    $manager_esr_number = mysqli_real_escape_string($conn, $_POST['managers_esr_number']);
    $manager_phone_number = mysqli_real_escape_string($conn, $_POST['manager_phone_number']);
    $bank_building_society = mysqli_real_escape_string($conn, $_POST['bank_building_society']);
    $account_name = mysqli_real_escape_string($conn, $_POST['account_name']);
    $sort_code = mysqli_real_escape_string($conn, $_POST['sort_code']);
    $ni_number = mysqli_real_escape_string($conn, $_POST['ni_number']);
    $start_date = mysqli_real_escape_string($conn, $_POST['start_date']);
    $covid_risk_assessment_score = mysqli_real_escape_string($conn, $_POST['covid_risk_assessment_score']);
    $occupational_health_clearance = mysqli_real_escape_string($conn, $_POST['occupational_health_clearance']);
    $tb_appointment = mysqli_real_escape_string($conn, $_POST['tb_appointment']);
    $certificate_of_sponsorship_number = mysqli_real_escape_string($conn, $_POST['certificate_of_sponsorship_number']);
    $brp_number = mysqli_real_escape_string($conn, $_POST['brp_number']);
    $brp_valid_from = mysqli_real_escape_string($conn, $_POST['brp_valid_from']);
    $brp_valid_to = mysqli_real_escape_string($conn, $_POST['brp_valid_to']);
    $rtw_sharecode_number = mysqli_real_escape_string($conn, $_POST['rtw_sharecode_number']);
    $rtw_expiry_date = mysqli_real_escape_string($conn, $_POST['rtw_expiry_date']);
    $dbs_number = mysqli_real_escape_string($conn, $_POST['dbs_number']);
    $dbs_issue_date = mysqli_real_escape_string($conn, $_POST['dbs_issue_date']);
    $dbs_acceptable = mysqli_real_escape_string($conn, $_POST['dbs_acceptable']);
    $candidate_compliance_pack = mysqli_real_escape_string($conn, $_POST['candidate_compliance_pack']);
    $candidate_compliance_pack_complete = mysqli_real_escape_string($conn, $_POST['candidate_compliance_pack_complete']);
    $first_attempt_osce = mysqli_real_escape_string($conn, $_POST['first_attempt_osce']);
    $second_attempt_osce = mysqli_real_escape_string($conn, $_POST['second_attempt_osce']);
    $third_attempt_osce = mysqli_real_escape_string($conn, $_POST['third_attempt_osce']);
    $date_of_birth = mysqli_real_escape_string($conn, $_POST['date_of_birth']);
 
    

    $sql = "INSERT INTO nursing_recruitment (first_name, last_name, cohort, esr_number, sex, nationality, email, phone_number, address_1, address_2, address_3, postcode, attachments, notes, nmc_pin, date_nmc_pin_obtained, prn_number, hospital, ward, cost_centre, band_4_position_number, manager_name, manager_esr_number, manager_phone_number, bank_building_society, account_name, sort_code, ni_number, start_date, covid_risk_assessment_score, occupational_health_clearance, tb_appointment, certificate_of_sponsorship_number, brp_number, brp_valid_from, brp_valid_to, rtw_sharecode_number, rtw_expiry_date, dbs_number, dbs_issue_date, dbs_acceptable, candidate_compliance_pack, candidate_compliance_pack_complete, first_attempt_osce, second_attempt_osce, third_attempt_osce, date_of_birth) VALUES ('$first_name', '$last_name', '$cohort', '$esr_number', '$sex', '$nationality', '$email', '$phone_number', '$address_1', '$address_2', '$address_3', '$postcode', '$attachments', '$notes', '$nmc_pin', '$date_nmc_pin_obtained', '$prn_number', '$hospital', '$ward', '$cost_centre', '$band_4_position_number', '$manager_name', '$manager_esr_number', '$manager_phone_number', '$bank_building_society', '$account_name', '$sort_code', '$ni_number', '$start_date', '$covid_risk_assessment_score', '$occupational_health_clearance', '$tb_appointment', '$certificate_of_sponsorship_number', '$brp_number', '$brp_valid_from', '$brp_valid_to', '$rtw_sharecode_number', '$rtw_expiry_date', '$dbs_number', '$dbs_issue_date', '$dbs_acceptable', '$candidate_compliance_pack', '$candidate_compliance_pack_complete', '$first_attempt_osce', '$second_attempt_osce', '$third_attempt_osce', '$date_of_birth')";


    if (mysqli_query($conn, $sql)) {
        header("Location: nurses.php");
    } else {
        echo "Error: " .$sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>