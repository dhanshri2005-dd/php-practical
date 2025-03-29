<?php
// Create a new SimpleXML object for the root element <College>
$xml = new SimpleXMLElement('<College/>');

// Create the <Courses> element
$courses = $xml->addChild('Courses');

// Arts Course
$artsCourse = $courses->addChild('Course');
$artsCourse->addChild('Name', 'Arts');
$artsCourse->addChild('Level', 'Undergraduate');
$artsCourse->addChild('IntakeCapacity', '100');

// Arts Students
$artsStudents = $artsCourse->addChild('Students');
$artsStudents->addChild('Student');
$artsStudents->Student->addChild('Name', 'John Doe');
$artsStudents->Student->addChild('AdmissionNumber', '101');
$artsStudents->Student->addChild('Age', '19');

$artsStudents->addChild('Student');
$artsStudents->Student[1]->addChild('Name', 'Emma Watson');
$artsStudents->Student[1]->addChild('AdmissionNumber', '102');
$artsStudents->Student[1]->addChild('Age', '18');

// Science Course
$scienceCourse = $courses->addChild('Course');
$scienceCourse->addChild('Name', 'Science');
$scienceCourse->addChild('Level', 'Undergraduate');
$scienceCourse->addChild('IntakeCapacity', '120');

// Science Students
$scienceStudents = $scienceCourse->addChild('Students');
$scienceStudents->addChild('Student');
$scienceStudents->Student->addChild('Name', 'David Smith');
$scienceStudents->Student->addChild('AdmissionNumber', '201');
$scienceStudents->Student->addChild('Age', '20');

$scienceStudents->addChild('Student');
$scienceStudents->Student[1]->addChild('Name', 'Rachel Green');
$scienceStudents->Student[1]->addChild('AdmissionNumber', '202');
$scienceStudents->Student[1]->addChild('Age', '21');

// Commerce Course
$commerceCourse = $courses->addChild('Course');
$commerceCourse->addChild('Name', 'Commerce');
$commerceCourse->addChild('Level', 'Undergraduate');
$commerceCourse->addChild('IntakeCapacity', '150');

// Commerce Students
$commerceStudents = $commerceCourse->addChild('Students');
$commerceStudents->addChild('Student');
$commerceStudents->Student->addChild('Name', 'Michael Johnson');
$commerceStudents->Student->addChild('AdmissionNumber', '301');
$commerceStudents->Student->addChild('Age', '18');

$commerceStudents->addChild('Student');
$commerceStudents->Student[1]->addChild('Name', 'Alice Brown');
$commerceStudents->Student[1]->addChild('AdmissionNumber', '302');
$commerceStudents->Student[1]->addChild('Age', '19');

// Management Course
$managementCourse = $courses->addChild('Course');
$managementCourse->addChild('Name', 'Management');
$managementCourse->addChild('Level', 'Postgraduate');
$managementCourse->addChild('IntakeCapacity', '60');

// Management Students
$managementStudents = $managementCourse->addChild('Students');
$managementStudents->addChild('Student');
$managementStudents->Student->addChild('Name', 'Olivia Davis');
$managementStudents->Student->addChild('AdmissionNumber', '401');
$managementStudents->Student->addChild('Age', '24');

$managementStudents->addChild('Student');
$managementStudents->Student[1]->addChild('Name', 'James Miller');
$managementStudents->Student[1]->addChild('AdmissionNumber', '402');
$managementStudents->Student[1]->addChild('Age', '25');

// Save the XML file
$xml->asXML('college_courses.xml');

// Output success message
echo "XML file 'college_courses.xml' has been created successfully!";
?>



