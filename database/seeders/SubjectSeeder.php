<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'subject_name' => 'Programming 101',
            'subject_description' => 'Basic programming for new student with no background in programming.',
            'subject_price' => 250,
            'tutor_id' => 1,
            'subject_sessions' => 15,
            'subject_rating' => 4.5,
        ]);
        Subject::create([
            'subject_name' => 'Programming 201',
            'subject_description' => 'Intermediate programming course that aim for those who has basic programming knowledge.',
            'subject_price' => 200,
            'tutor_id' => 2,
            'subject_sessions' => 10,
            'subject_rating' => 4,
        ]);
        Subject::create([
            'subject_name' => 'Introduction to Web programming ',
            'subject_description' => 'Basic introduction to HTML, CSS, JavaScript, PHP and MySQL.',
            'subject_price' => 180,
            'tutor_id' => 5,
            'subject_sessions' => 15,
            'subject_rating' => 3.8,
        ]);
        Subject::create([
            'subject_name' => 'Web Programming Advanced',
            'subject_description' => 'Course aim for those who are familiar with basic web programming.',
            'subject_price' => 150,
            'tutor_id' => 3,
            'subject_sessions' => 15,
            'subject_rating' => 4.2,
        ]);
        Subject::create([
            'subject_name' => 'Python for Everybody',
            'subject_description' => 'This Specialization builds on the success of the Python for Everybody course and will introduce fundamental programming concepts including data structures, networked application program interfaces, and databases, using the Python programming language.',
            'subject_price' => 120,
            'tutor_id' => 6,
            'subject_sessions' => 5,
            'subject_rating' => 4.5,
        ]);
        Subject::create([
            'subject_name' => 'Introduction to Computer Science',
            'subject_description' => 'This specialisation covers topics ranging from basic computing principles to the mathematical foundations required for computer science. ',
            'subject_price' => 180,
            'tutor_id' => 3,
            'subject_sessions' => 10,
            'subject_rating' => 4.2,
        ]);
        Subject::create([
            'subject_name' => 'Code Yourself! An Introduction to Programming',
            'subject_description' => 'This course will teach you how to program in Scratch, an easy to use visual programming language. More importantly, it will introduce you to the fundamental principles of computing and it will help you think like a software engineer.',
            'subject_price' => 120,
            'tutor_id' => 4,
            'subject_sessions' => 5,
            'subject_rating' => 4,
        ]);
        Subject::create([
            'subject_name' => 'IBM Full Stack Software Developer Professional Certificate',
            'subject_description' => 'Kickstart your career in application development. Master Cloud Native and Full Stack Development using hands-on projects involving HTML, JavaScript, Node.js, Python, Django, Containers, Microservices and more. No prior experience required.',
            'subject_price' => 230,
            'tutor_id' => 8,
            'subject_sessions' => 8,
            'subject_rating' => 4.3,
        ]);
        Subject::create([
            'subject_name' => 'Graphic Design Specialization',
            'subject_description' => 'This four-course sequence exposes students to the fundamental skills required to make sophisticated graphic design: process, historical context, and communication through image-making and typography. T',
            'subject_price' => 200,
            'tutor_id' => 1,
            'subject_sessions' => 5,
            'subject_rating' => 4.2,
        ]);
        Subject::create([
            'subject_name' => 'Fundamentals of Graphic Design',
            'subject_description' => 'At the end of this course you will have learned how to explore and investigate visual representation through a range of image-making techniques; understand basic principles of working with shape, color and pattern; been exposed to the language and skills of typography; and understand and have applied the principles of composition and visual contrast.',
            'subject_price' => 150,
            'tutor_id' => 2,
            'subject_sessions' => 5,
            'subject_rating' => 3.8,
        ]);
        Subject::create([
            'subject_name' => 'Fundamentals of Graphic Design',
            'subject_description' => 'Project centered courses are designed specifically to help you complete a personally meaningful real-world project, with your instructor and a community of like-minded learners providing guidance and suggestions along the way.',
            'subject_price' => 150,
            'tutor_id' => 5,
            'subject_sessions' => 5,
            'subject_rating' => 4.8,
        ]);
        Subject::create([
            'subject_name' => 'Full-Stack Web Development with React',
            'subject_description' => 'Learners will work on hands-on exercises, culminating in development of a full-fledged application at the end of each course. Each course also includes a mini-Capstone Project as part of the Honors Track where you’ll apply your skills to build a fully functional project.',
            'subject_price' => 250,
            'tutor_id' => 7,
            'subject_sessions' => 10,
            'subject_rating' => 4.2,
        ]);
        Subject::create([
            'subject_name' => 'Software Design and Architecture',
            'subject_description' => 'In the Software Design and Architecture Specialization, you will learn how to apply design principles, patterns, and architectures to create reusable and flexible software applications and systems. You will learn how to express and document the design and architecture of a software system using a visual notation.',
            'subject_price' => 170,
            'tutor_id' => 8,
            'subject_sessions' => 3,
            'subject_rating' => 4.2,
        ]);
        Subject::create([
            'subject_name' => 'Software Testing and Automation',
            'subject_description' => 'Learners will build test plans, test suites, and test analysis reports. Learners will develop properties and assertions in code to facilitate automated test generation. Learners will also create pre-conditions for methods to facilitate formal proofs of correctness.',
            'subject_price' => 170,
            'tutor_id' => 9,
            'subject_sessions' => 5,
            'subject_rating' => 4.1,
        ]);
        Subject::create([
            'subject_name' => 'Introduction to Cyber Security',
            'subject_description' => 'The learning outcome is simple: We hope learners will develop a lifelong passion and appreciation for cyber security, which we are certain will help in future endeavors.',
            'subject_price' => 200,
            'tutor_id' => 9,
            'subject_sessions' => 5,
            'subject_rating' => 4.2,
        ]);
        Subject::create([
            'subject_name' => 'Web Programming: The Hanis Method',
            'subject_description' => 'This course is OP! Should learn this!!!',
            'subject_price' => 3000,
            'tutor_id' => 10,
            'subject_sessions' => 1,
            'subject_rating' => 5,
        ]);
        Subject::create([
            'subject_name' => 'Mobile Programming: The Hanis Method',
            'subject_description' => 'This course will make you go "Good game, well played." The lecturer is Master Ahmad Hanis. Very strong!!',
            'subject_price' => 5500,
            'tutor_id' => 10,
            'subject_sessions' => 3,
            'subject_rating' => 5,
        ]);
        Subject::create([
            'subject_name' => 'Typing 101',
            'subject_description' => 'If you don\'t know how to type, this is the right class for you. Learn how to type with all 20 of your fingers. Yes, you heard me right! By the time you finish this course, you will be able to type with your toes. BEYOND GODLIKE!!!',
            'subject_price' => 10,
            'tutor_id' => 1,
            'subject_sessions' => 10,
            'subject_rating' => 1,
        ]);
    }
}
