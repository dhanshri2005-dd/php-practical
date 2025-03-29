<?xml version="1.0" encoding="UTF-8"?>
<subjects>
    <subject>
        <subject_code>BCA 245</subject_code>
        <subject_name>Web Technology Laboratory</subject_name>
    </subject>
    <subject>
        <subject_code>BCA 246</subject_code>
        <subject_name>Database Management Systems</subject_name>
    </subject>
    <subject>
        <subject_code>BCA 247</subject_code>
        <subject_name>Computer Networks</subject_name>
    </subject>
    <subject>
        <subject_code>BCA 248</subject_code>
        <subject_name>Data Structures</subject_name>
    </subject>
    <subject>
        <subject_code>BCA 249</subject_code>
        <subject_name>Operating Systems</subject_name>
    </subject>
</subjects>



<?php
// Load the XML file into a SimpleXMLElement object
$xml = simplexml_load_file('subjects.xml');

// Flag to check if the subject is found
$found = false;

// Iterate through each subject in the XML file
foreach ($xml->subject as $subject) 
{
    // Check if the subject name is "Web Technology Laboratory"
    if ((string)$subject->subject_name === "Web Technology Laboratory") {
        // Display the subject code
        echo "Subject Code for Web Technology Laboratory: " . $subject->subject_code;
        $found = true;
        break; // Exit the loop once the subject is found
    }
}

// If the subject is not found
if (!$found) {
    echo "Subject 'Web Technology Laboratory' not found.";
}
?>
