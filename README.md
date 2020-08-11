# Moodle Sample Client Side API Utils to CRUD (create, read, update, delete) users, category, course, cohort

## Required Capabilities

- webservice/rest:use
- moodle/user:create 
- moodle/user:update
- moodle/user:delete
- moodle/user:viewdetails
- moodle/user:viewhiddendetails
- moodle/user:viewalldetails
- moodle/user:editprofile

- moodle/role:manage
- moodle/role:assign
- moodle/role:review

- moodle/category:manage
- moodle/category:viewcourselist
- moodle/category:viewhiddencategories

- moodle/course:create
- moodle/course:view
- moodle/course:update
- moodle/course:delete
- moodle/course:visibility
- moodle/course:changecategory
- moodle/course:changefullname
- moodle/course:viewparticipants
- moodle/course:configurecustomfields

- moodle/cohort:assign
- moodle/cohort:manage
- moodle/cohort:view

- moodle/calendar:manageentries

---

## Required Web Service Functions

- core_user_create_users
- core_user_delete_users
- core_user_update_users
- core_user_get_users
- core_user_get_users_by_field

- core_role_assign_roles 
	
- core_course_get_categories
- core_course_create_categories

- core_course_create_courses
- core_course_get_courses

- core_cohort_create_cohorts
- core_cohort_add_cohort_members

- core_calendar_create_calendar_events

---
