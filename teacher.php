<?php

// Create a new XML document
$xml = new SimpleXMLElement('<Department/>');

// Data for teachers
$teachers = [
    ["name" => "Dr. John Doe", "qualification" => "NET", "subject_taught" => "Data Structures", "experience" => "10 years"],

    ["name" => "Prof. Jane Smith", "qualification" => "NET", "subject_taught" => "Algorithms", "experience" => "8 years"],

    ["name" => "Mr. Robert Brown", "qualification" => "NET", "subject_taught" => "Operating Systems", "experience" => "6 years"],

    ["name" => "Mrs. Alice Johnson", "qualification" => "NET", "subject_taught" => "Computer Networks", "experience" => "7 years"],

    ["name" => "Dr. Emily Davis", "qualification" => "NET", "subject_taught" => "Database Management Systems", "experience" => "9 years"]
];

// Loop through each teacher's data and add it to the XML
foreach ($teachers as $teacher) {
    // Create a <Computer Science> element for each teacher
    $computerScience = $xml->addChild('ComputerScience');

    // Add child elements for teacher details
    $computerScience->addChild('Teacher Name', $teacher['name']);
    $computerScience->addChild('Qualification', $teacher['qualification']);
    $computerScience->addChild('Subject Taught', $teacher['subject_taught']);
    $computerScience->addChild('Experience', $teacher['experience']);
}

// Save the XML to a file
$xml->asXML('Teacher.xml');

echo "XML file 'Teacher.xml' has been created successfully.";

?>

