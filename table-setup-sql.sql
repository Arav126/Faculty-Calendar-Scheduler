=================================
faculty_users
=================================

CREATE TABLE faculty_users 
(
    username	VARCHAR(512),
    password	VARCHAR(512),
    name	VARCHAR(512),
    email	VARCHAR(512),
    department	VARCHAR(512),
    phone	VARCHAR(512),
    role	VARCHAR(512),
    address1	VARCHAR(512),
    address2	VARCHAR(512),
    state	VARCHAR(512),
    country	VARCHAR(512),
    pincode	VARCHAR(512),
    education	VARCHAR(512)
);

INSERT INTO faculty_users (username, password, name, email, department, phone, role, address1, address2, state, country, pincode, education) VALUES ('Radhika_N', 'Radhika@123', 'Radhika N', 'Radhika_n@cb.amrita.edu', 'CSE', '9876543210', 'staff', 'Nehru Nagar West, Coimbatore.', 'Saibaba Colony', 'Tamil Nadu', 'India', '641001', 'PHD in Data Science');
INSERT INTO faculty_users (username, password, name, email, department, phone, role, address1, address2, state, country, pincode, education) VALUES ('Govindarajan_J', 'Govindarajan@123', 'Govindarajan J', 'govindarajan_j@cb.amrita.edu', 'CSE', '8912345678', 'staff', 'Nehru Nagar West, Coimbatore.', 'Saibaba Colony', 'Tamil Nadu', 'India', '641001', 'PHD in Data Science');
INSERT INTO faculty_users (username, password, name, email, department, phone, role, address1, address2, state, country, pincode, education) VALUES ('Deepika_T', 'Deepika@123', 'Deepika T', 'deepika_t@cb.amrita.edu', 'CSE', '9238987347', 'staff', 'Nehru Nagar West, Coimbatore.', 'Saibaba Colony', 'Tamil Nadu', 'India', '641001', 'PHD in Data Science');
INSERT INTO faculty_users (username, password, name, email, department, phone, role, address1, address2, state, country, pincode, education) VALUES ('T_Senthilkumar', 'Senthilkumar@123', 'T Senthil Kumar', 't_senthilkumar@cb.amrita.edu', 'CSE', '9248102344', 'staff', 'Nehru Nagar West, Coimbatore.', 'Saibaba Colony', 'Tamil Nadu', 'India', '641001', 'PHD in Data Science');
INSERT INTO faculty_users (username, password, name, email, department, phone, role, address1, address2, state, country, pincode, education) VALUES ('Abirami_K', 'Abirami@123', 'Abirami K', 'abirami_k@cb.amrita.edu', 'CSE', '9212102344', 'staff', 'Nehru Nagar West, Coimbatore.', 'Saibaba Colony', 'Tamil Nadu', 'India', '641001', 'PHD in Data Science');
INSERT INTO faculty_users (username, password, name, email, department, phone, role, address1, address2, state, country, pincode, education) VALUES ('Radhiga_G', 'Radhiga@123', 'Radhiga G', 'radhiga_g@cb.amrita.edu', 'CSE', '9333302344', 'staff', 'Nehru Nagar West, Coimbatore.', 'Saibaba Colony', 'Tamil Nadu', 'India', '641001', 'PHD in Data Science');
INSERT INTO faculty_users (username, password, name, email, department, phone, role, address1, address2, state, country, pincode, education) VALUES ('Lalithamani_N', 'Lalithamani@123', 'Lalithamani N', 'lalithamani_n@cb.amrita.edu', 'CSE', '9423302344', 'hod', 'Nehru Nagar West, Coimbatore.', 'Saibaba Colony', 'Tamil Nadu', 'India', '641001', 'PHD in Data Science');
INSERT INTO faculty_users (username, password, name, email, department, phone, role, address1, address2, state, country, pincode, education) VALUES ('Vidya_B', 'Vidya@123', 'Vidya B', 'vidya_b@cb.amrita.edu', 'CSE', '9923423344', 'hod', 'Nehru Nagar West, Coimbatore.', 'Saibaba Colony', 'Tamil Nadu', 'India', '641001', 'PHD in Data Science');

=================================
faculty_timetable
=================================

CREATE TABLE faculty_timetable 
(
    username	VARCHAR(512),
    name	VARCHAR(512),
    weekdays	VARCHAR(512),
    1st_slot	VARCHAR(512),
    2nd_slot	VARCHAR(512),
    3rd_slot	VARCHAR(512),
    4th_slot	VARCHAR(512),
    5th_slot	VARCHAR(512),
    6th_slot	VARCHAR(512),
    7th_slot	VARCHAR(512),
    8th_slot	VARCHAR(512)
);

INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Radhika_N', 'Radhika N', 'Monday', '19CSE351-CSEF', '19CSE351-CSEC', '', '', '19CSE331-CSEA', '', '', 'Project Review');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Radhika_N', 'Radhika N', 'Tuesday', '', '', '19CSE351-CSEF', '19CSE351-CSEC', '', '', '19CSE331-CSEB', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Radhika_N', 'Radhika N', 'Wednesday', '', '', '', '19CSE351-CSEF', '', '19CSE351-CSEC', '19CSE351-CSEC', 'PG Guidance');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Radhika_N', 'Radhika N', 'Thursday', '19CSE331-CSEA', '', '19CSE351-CSEC', '', '', '19CSE351-CSEF', '19CSE351-CSEF', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Radhika_N', 'Radhika N', 'Friday', '19CSE351-CSEC', '19CSE351-CSEF', '', '', '19CSE331-CSEB', '', '', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Govindarajan_J', 'Govindarajan J', 'Monday', '19CSE351-CSEA', '', '19CSE351-CSEB', '', '19CSE331-CSED', '', '', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Govindarajan_J', 'Govindarajan J', 'Tuesday', '19CSE351-CSEB', '19CSE351-CSEA', '', '', '', '19CSE331-CSEE', '', 'Project Review');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Govindarajan_J', 'Govindarajan J', 'Wednesday', '', '19CSE331-CSEE', '19CSE351-CSEA', '', '19CSE351-CSEB', '19CSE351-CSEB', '', 'PG Guidance');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Govindarajan_J', 'Govindarajan J', 'Thursday', '19CSE351-CSEB', '19CSE331-CSED', '', '', '19CSE351-CSEA', '19CSE351-CSEA', '', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Govindarajan_J', 'Govindarajan J', 'Friday', '', '19CSE351-CSEA', '', '19CSE351-CSEB', '', '', '', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Deepika_T', 'Deepika T', 'Monday', '19CSE351-CSED', '', '19CSE351-CSEE', '', '19CSE331-CSEF', '19CSE351-CSED', '19CSE351-CSED', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Deepika_T', 'Deepika T', 'Tuesday', '19CSE351-CSEE', '', '19CSE351-CSED', '', '', '19CSE351-CSEE', '19CSE351-CSEE', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Deepika_T', 'Deepika T', 'Wednesday', '', '19CSE351-CSEE', '', '19CSE331-CSEC', '', '', '', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Deepika_T', 'Deepika T', 'Thursday', '', '', '', '19CSE351-CSED', '', '19CSE331-CSEC', '', 'Project Review');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Deepika_T', 'Deepika T', 'Friday', '19CSE331-CSEF', '19CSE351-CSED', '19CSE351-CSEE', '', '', '', '', 'PG Guidance');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('T_Senthilkumar', 'T Senthil Kumar', 'Monday', '19CSE312-CSEC', '', '', '', '19CSE312-CSEF', '19CSE312-CSEF', '', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('T_Senthilkumar', 'T Senthil Kumar', 'Tuesday', '', '19CSE312-CSEF', '', '19CSE313-CSEA', '19CSE312-CSEC', '19CSE312-CSEC', '', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('T_Senthilkumar', 'T Senthil Kumar', 'Wednesday', '19CSE312-CSEC', '19CSE312-CSEC', '', '19CSE313-CSEB', '', '', '', 'Project Review');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('T_Senthilkumar', 'T Senthil Kumar', 'Thursday', '19CSE312-CSEF', '', '19CSE313-CSEA', '', '19CSE313-CSEB', '', '', 'PG Guidance');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('T_Senthilkumar', 'T Senthil Kumar', 'Friday', '', '', '', '19CSE312-CSEF', '', '', '', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Abirami_K', 'Abirami K', 'Monday', '19CSE312-CSEB', '', '', '', '', '19CSE312-CSEA', '19CSE312-CSEA', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Abirami_K', 'Abirami K', 'Tuesday', '19CSE312-CSEA', '', '19CSE312-CSEA', '', '19CSE312-CSEB', '19CSE312-CSEB', '', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Abirami_K', 'Abirami K', 'Wednesday', '', '19CSE312-CSEA', '', '19CSE313-CSED', '', '', '', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Abirami_K', 'Abirami K', 'Thursday', '', '', '19CSE312-CSEB', '19CSE313-CSEE', '19CSE313-CSED', '', '', 'Project Review');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Abirami_K', 'Abirami K', 'Friday', '', '19CSE312-CSEB', '', '', '19CSE313-CSEE', '', '', 'PG Guidance');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Radhiga_G', 'Radhiga G', 'Monday', '', '', '19CSE312-CSED', '19CSE313-CSEC', '', '19CSE312-CSED', '19CSE312-CSED', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Radhiga_G', 'Radhiga G', 'Tuesday', '19CSE312-CSED', '', '19CSE312-CSEE', '', '', '', '', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Radhiga_G', 'Radhiga G', 'Wednesday', '19CSE312-CSEE', '19CSE312-CSED', '', '', '19CSE312-CSEE', '19CSE312-CSEE', '', '');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Radhiga_G', 'Radhiga G', 'Thursday', '', '19CSE312-CSEE', '', '19CSE313-CSEF', '', '', '', 'Project Review');
INSERT INTO faculty_timetable (username, name, weekdays, 1st_slot, 2nd_slot, 3rd_slot, 4th_slot, 5th_slot, 6th_slot, 7th_slot, 8th_slot) VALUES ('Radhiga_G', 'Radhiga G', 'Friday', '', '19CSE313-CSEF', '', '19CSE313-CSEC', '', '', '', 'PG Guidance');

=================================
appointments
=================================

CREATE TABLE appointments 
(
    id          INT,
    username	VARCHAR(512),
    name	VARCHAR(512),
    date	date,
    slot	VARCHAR(512),
    course	VARCHAR(512),
    reason	VARCHAR(512)
);

=================================
faculty_course
=================================

CREATE TABLE faculty_course 
(
    name	VARCHAR(512),
    course	VARCHAR(512)
);

INSERT INTO faculty_course (name, course) VALUES ('Radhika N', '19CSE351-CSEC');
INSERT INTO faculty_course (name, course) VALUES ('Radhika N', '19CSE351-CSEF');
INSERT INTO faculty_course (name, course) VALUES ('Radhika N', '19CSE331-CSEA');
INSERT INTO faculty_course (name, course) VALUES ('Radhika N', '19CSE331-CSEB');
INSERT INTO faculty_course (name, course) VALUES ('Govindarajan J', '19CSE351-CSEA');
INSERT INTO faculty_course (name, course) VALUES ('Govindarajan J', '19CSE351-CSEB');
INSERT INTO faculty_course (name, course) VALUES ('Govindarajan J', '19CSE331-CSED');
INSERT INTO faculty_course (name, course) VALUES ('Govindarajan J', '19CSE331-CSEE');
INSERT INTO faculty_course (name, course) VALUES ('Deepika T', '19CSE351-CSED');
INSERT INTO faculty_course (name, course) VALUES ('Deepika T', '19CSE351-CSEE');
INSERT INTO faculty_course (name, course) VALUES ('Deepika T', '19CSE331-CSEC');
INSERT INTO faculty_course (name, course) VALUES ('Deepika T', '19CSE331-CSEF');
INSERT INTO faculty_course (name, course) VALUES ('T Senthil Kumar', '19CSE312-CSEC');
INSERT INTO faculty_course (name, course) VALUES ('T Senthil Kumar', '19CSE312-CSEF');
INSERT INTO faculty_course (name, course) VALUES ('T Senthil Kumar', '19CSE313-CSEA');
INSERT INTO faculty_course (name, course) VALUES ('T Senthil Kumar', '19CSE313-CSEB');
INSERT INTO faculty_course (name, course) VALUES ('Abirami K', '19CSE312-CSEA');
INSERT INTO faculty_course (name, course) VALUES ('Abirami K', '19CSE312-CSEB');
INSERT INTO faculty_course (name, course) VALUES ('Abirami K', '19CSE313-CSED');
INSERT INTO faculty_course (name, course) VALUES ('Abirami K', '19CSE313-CSEE');
INSERT INTO faculty_course (name, course) VALUES ('Radhiga G', '19CSE312-CSED');
INSERT INTO faculty_course (name, course) VALUES ('Radhiga G', '19CSE312-CSEE');
INSERT INTO faculty_course (name, course) VALUES ('Radhiga G', '19CSE313-CSEC');
INSERT INTO faculty_course (name, course) VALUES ('Radhiga G', '19CSE313-CSEF');


