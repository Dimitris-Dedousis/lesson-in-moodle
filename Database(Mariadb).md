# Database (Mariadb)
## [SQL Αρχείο](https://github.com/Dimitris-Dedousis/lesson-in-moodle/blob/main/moodle.sql)
```bash
┌──(dimitris㉿dimitris)-[~]
└─$ sudo mariadb -h 127.0.0.1 -u root -p
[sudo] password for dimitris: 
Enter password: 
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 31
Server version: 10.11.6-MariaDB-2 Debian n/a

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

unknown [database]> connect moodle;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Connection id:    33
Current database: moodle

MariaDB [moodle]> show tables;
+----------------------------------+
| Tables_in_moodle                 |
+----------------------------------+
| mdl_adminpresets                 |
| mdl_adminpresets_app             |
| mdl_adminpresets_app_it          |
| mdl_adminpresets_app_it_a        |
| mdl_adminpresets_app_plug        |
| mdl_adminpresets_it              |
| mdl_adminpresets_it_a            |
| mdl_adminpresets_plug            |
| mdl_analytics_indicator_calc     |
| mdl_analytics_models             |
| mdl_analytics_models_log         |
| mdl_analytics_predict_samples    |
| mdl_analytics_prediction_actions |
| mdl_analytics_predictions        |
| mdl_analytics_train_samples      |
| mdl_analytics_used_analysables   |
| mdl_analytics_used_files         |
| mdl_assign                       |
| mdl_assign_grades                |
| mdl_assign_overrides             |
| mdl_assign_plugin_config         |
| mdl_assign_submission            |
| mdl_assign_user_flags            |
| mdl_assign_user_mapping          |
| mdl_assignfeedback_comments      |
| mdl_assignfeedback_editpdf_annot |
| mdl_assignfeedback_editpdf_cmnt  |
| mdl_assignfeedback_editpdf_quick |
| mdl_assignfeedback_editpdf_rot   |
| mdl_assignfeedback_file          |
| mdl_assignsubmission_file        |
| mdl_assignsubmission_onlinetext  |
| mdl_auth_lti_linked_login        |
| mdl_auth_oauth2_linked_login     |
| mdl_backup_controllers           |
| mdl_backup_courses               |
| mdl_backup_logs                  |
| mdl_badge                        |
| mdl_badge_alignment              |
| mdl_badge_backpack               |
| mdl_badge_backpack_oauth2        |
| mdl_badge_criteria               |
| mdl_badge_criteria_met           |
| mdl_badge_criteria_param         |
| mdl_badge_endorsement            |
| mdl_badge_external               |
| mdl_badge_external_backpack      |
| mdl_badge_external_identifier    |
| mdl_badge_issued                 |
| mdl_badge_manual_award           |
| mdl_badge_related                |
| mdl_bigbluebuttonbn              |
| mdl_bigbluebuttonbn_logs         |
| mdl_bigbluebuttonbn_recordings   |
| mdl_block                        |
| mdl_block_instances              |
| mdl_block_positions              |
| mdl_block_recent_activity        |
| mdl_block_recentlyaccesseditems  |
| mdl_block_rss_client             |
| mdl_blog_association             |
| mdl_blog_external                |
| mdl_book                         |
| mdl_book_chapters                |
| mdl_cache_filters                |
| mdl_cache_flags                  |
| mdl_capabilities                 |
| mdl_chat                         |
| mdl_chat_messages                |
| mdl_chat_messages_current        |
| mdl_chat_users                   |
| mdl_choice                       |
| mdl_choice_answers               |
| mdl_choice_options               |
| mdl_cohort                       |
| mdl_cohort_members               |
| mdl_comments                     |
| mdl_communication                |
| mdl_communication_customlink     |
| mdl_communication_user           |
| mdl_competency                   |
| mdl_competency_coursecomp        |
| mdl_competency_coursecompsetting |
| mdl_competency_evidence          |
| mdl_competency_framework         |
| mdl_competency_modulecomp        |
| mdl_competency_plan              |
| mdl_competency_plancomp          |
| mdl_competency_relatedcomp       |
| mdl_competency_template          |
| mdl_competency_templatecohort    |
| mdl_competency_templatecomp      |
| mdl_competency_usercomp          |
| mdl_competency_usercompcourse    |
| mdl_competency_usercompplan      |
| mdl_competency_userevidence      |
| mdl_competency_userevidencecomp  |
| mdl_config                       |
| mdl_config_log                   |
| mdl_config_plugins               |
| mdl_contentbank_content          |
| mdl_context                      |
| mdl_context_temp                 |
| mdl_course                       |
| mdl_course_categories            |
| mdl_course_completion_aggr_methd |
| mdl_course_completion_crit_compl |
| mdl_course_completion_criteria   |
| mdl_course_completion_defaults   |
| mdl_course_completions           |
| mdl_course_format_options        |
| mdl_course_modules               |
| mdl_course_modules_completion    |
| mdl_course_modules_viewed        |
| mdl_course_published             |
| mdl_course_request               |
| mdl_course_sections              |
| mdl_customfield_category         |
| mdl_customfield_data             |
| mdl_customfield_field            |
| mdl_data                         |
| mdl_data_content                 |
| mdl_data_fields                  |
| mdl_data_records                 |
| mdl_editor_atto_autosave         |
| mdl_enrol                        |
| mdl_enrol_flatfile               |
| mdl_enrol_lti_app_registration   |
| mdl_enrol_lti_context            |
| mdl_enrol_lti_deployment         |
| mdl_enrol_lti_lti2_consumer      |
| mdl_enrol_lti_lti2_context       |
| mdl_enrol_lti_lti2_nonce         |
| mdl_enrol_lti_lti2_resource_link |
| mdl_enrol_lti_lti2_share_key     |
| mdl_enrol_lti_lti2_tool_proxy    |
| mdl_enrol_lti_lti2_user_result   |
| mdl_enrol_lti_resource_link      |
| mdl_enrol_lti_tool_consumer_map  |
| mdl_enrol_lti_tools              |
| mdl_enrol_lti_user_resource_link |
| mdl_enrol_lti_users              |
| mdl_enrol_paypal                 |
| mdl_event                        |
| mdl_event_subscriptions          |
| mdl_events_handlers              |
| mdl_events_queue                 |
| mdl_events_queue_handlers        |
| mdl_external_functions           |
| mdl_external_services            |
| mdl_external_services_functions  |
| mdl_external_services_users      |
| mdl_external_tokens              |
| mdl_favourite                    |
| mdl_feedback                     |
| mdl_feedback_completed           |
| mdl_feedback_completedtmp        |
| mdl_feedback_item                |
| mdl_feedback_sitecourse_map      |
| mdl_feedback_template            |
| mdl_feedback_value               |
| mdl_feedback_valuetmp            |
| mdl_file_conversion              |
| mdl_files                        |
| mdl_files_reference              |
| mdl_filter_active                |
| mdl_filter_config                |
| mdl_folder                       |
| mdl_forum                        |
| mdl_forum_digests                |
| mdl_forum_discussion_subs        |
| mdl_forum_discussions            |
| mdl_forum_grades                 |
| mdl_forum_posts                  |
| mdl_forum_queue                  |
| mdl_forum_read                   |
| mdl_forum_subscriptions          |
| mdl_forum_track_prefs            |
| mdl_glossary                     |
| mdl_glossary_alias               |
| mdl_glossary_categories          |
| mdl_glossary_entries             |
| mdl_glossary_entries_categories  |
| mdl_glossary_formats             |
| mdl_grade_categories             |
| mdl_grade_categories_history     |
| mdl_grade_grades                 |
| mdl_grade_grades_history         |
| mdl_grade_import_newitem         |
| mdl_grade_import_values          |
| mdl_grade_items                  |
| mdl_grade_items_history          |
| mdl_grade_letters                |
| mdl_grade_outcomes               |
| mdl_grade_outcomes_courses       |
| mdl_grade_outcomes_history       |
| mdl_grade_settings               |
| mdl_grading_areas                |
| mdl_grading_definitions          |
| mdl_grading_instances            |
| mdl_gradingform_guide_comments   |
| mdl_gradingform_guide_criteria   |
| mdl_gradingform_guide_fillings   |
| mdl_gradingform_rubric_criteria  |
| mdl_gradingform_rubric_fillings  |
| mdl_gradingform_rubric_levels    |
| mdl_groupings                    |
| mdl_groupings_groups             |
| mdl_groups                       |
| mdl_groups_members               |
| mdl_h5p                          |
| mdl_h5p_contents_libraries       |
| mdl_h5p_libraries                |
| mdl_h5p_libraries_cachedassets   |
| mdl_h5p_library_dependencies     |
| mdl_h5pactivity                  |
| mdl_h5pactivity_attempts         |
| mdl_h5pactivity_attempts_results |
| mdl_imscp                        |
| mdl_infected_files               |
| mdl_label                        |
| mdl_lesson                       |
| mdl_lesson_answers               |
| mdl_lesson_attempts              |
| mdl_lesson_branch                |
| mdl_lesson_grades                |
| mdl_lesson_overrides             |
| mdl_lesson_pages                 |
| mdl_lesson_timer                 |
| mdl_license                      |
| mdl_lock_db                      |
| mdl_log                          |
| mdl_log_display                  |
| mdl_log_queries                  |
| mdl_logstore_standard_log        |
| mdl_lti                          |
| mdl_lti_access_tokens            |
| mdl_lti_coursevisible            |
| mdl_lti_submission               |
| mdl_lti_tool_proxies             |
| mdl_lti_tool_settings            |
| mdl_lti_types                    |
| mdl_lti_types_categories         |
| mdl_lti_types_config             |
| mdl_ltiservice_gradebookservices |
| mdl_matrix_room                  |
| mdl_message                      |
| mdl_message_airnotifier_devices  |
| mdl_message_contact_requests     |
| mdl_message_contacts             |
| mdl_message_conversation_actions |
| mdl_message_conversation_members |
| mdl_message_conversations        |
| mdl_message_email_messages       |
| mdl_message_popup                |
| mdl_message_popup_notifications  |
| mdl_message_processors           |
| mdl_message_providers            |
| mdl_message_read                 |
| mdl_message_user_actions         |
| mdl_message_users_blocked        |
| mdl_messageinbound_datakeys      |
| mdl_messageinbound_handlers      |
| mdl_messageinbound_messagelist   |
| mdl_messages                     |
| mdl_mnet_application             |
| mdl_mnet_host                    |
| mdl_mnet_host2service            |
| mdl_mnet_log                     |
| mdl_mnet_remote_rpc              |
| mdl_mnet_remote_service2rpc      |
| mdl_mnet_rpc                     |
| mdl_mnet_service                 |
| mdl_mnet_service2rpc             |
| mdl_mnet_session                 |
| mdl_mnet_sso_access_control      |
| mdl_mnetservice_enrol_courses    |
| mdl_mnetservice_enrol_enrolments |
| mdl_modules                      |
| mdl_moodlenet_share_progress     |
| mdl_my_pages                     |
| mdl_notifications                |
| mdl_oauth2_access_token          |
| mdl_oauth2_endpoint              |
| mdl_oauth2_issuer                |
| mdl_oauth2_refresh_token         |
| mdl_oauth2_system_account        |
| mdl_oauth2_user_field_mapping    |
| mdl_page                         |
| mdl_paygw_paypal                 |
| mdl_payment_accounts             |
| mdl_payment_gateways             |
| mdl_payments                     |
| mdl_portfolio_instance           |
| mdl_portfolio_instance_config    |
| mdl_portfolio_instance_user      |
| mdl_portfolio_log                |
| mdl_portfolio_mahara_queue       |
| mdl_portfolio_tempdata           |
| mdl_post                         |
| mdl_profiling                    |
| mdl_qtype_ddimageortext          |
| mdl_qtype_ddimageortext_drags    |
| mdl_qtype_ddimageortext_drops    |
| mdl_qtype_ddmarker               |
| mdl_qtype_ddmarker_drags         |
| mdl_qtype_ddmarker_drops         |
| mdl_qtype_essay_options          |
| mdl_qtype_match_options          |
| mdl_qtype_match_subquestions     |
| mdl_qtype_multichoice_options    |
| mdl_qtype_randomsamatch_options  |
| mdl_qtype_shortanswer_options    |
| mdl_question                     |
| mdl_question_answers             |
| mdl_question_attempt_step_data   |
| mdl_question_attempt_steps       |
| mdl_question_attempts            |
| mdl_question_bank_entries        |
| mdl_question_calculated          |
| mdl_question_calculated_options  |
| mdl_question_categories          |
| mdl_question_dataset_definitions |
| mdl_question_dataset_items       |
| mdl_question_datasets            |
| mdl_question_ddwtos              |
| mdl_question_gapselect           |
| mdl_question_hints               |
| mdl_question_multianswer         |
| mdl_question_numerical           |
| mdl_question_numerical_options   |
| mdl_question_numerical_units     |
| mdl_question_references          |
| mdl_question_response_analysis   |
| mdl_question_response_count      |
| mdl_question_set_references      |
| mdl_question_statistics          |
| mdl_question_truefalse           |
| mdl_question_usages              |
| mdl_question_versions            |
| mdl_quiz                         |
| mdl_quiz_attempts                |
| mdl_quiz_feedback                |
| mdl_quiz_grades                  |
| mdl_quiz_overrides               |
| mdl_quiz_overview_regrades       |
| mdl_quiz_reports                 |
| mdl_quiz_sections                |
| mdl_quiz_slots                   |
| mdl_quiz_statistics              |
| mdl_quizaccess_seb_quizsettings  |
| mdl_quizaccess_seb_template      |
| mdl_rating                       |
| mdl_registration_hubs            |
| mdl_reportbuilder_audience       |
| mdl_reportbuilder_column         |
| mdl_reportbuilder_filter         |
| mdl_reportbuilder_report         |
| mdl_reportbuilder_schedule       |
| mdl_repository                   |
| mdl_repository_instance_config   |
| mdl_repository_instances         |
| mdl_repository_onedrive_access   |
| mdl_resource                     |
| mdl_resource_old                 |
| mdl_role                         |
| mdl_role_allow_assign            |
| mdl_role_allow_override          |
| mdl_role_allow_switch            |
| mdl_role_allow_view              |
| mdl_role_assignments             |
| mdl_role_capabilities            |
| mdl_role_context_levels          |
| mdl_role_names                   |
| mdl_scale                        |
| mdl_scale_history                |
| mdl_scorm                        |
| mdl_scorm_aicc_session           |
| mdl_scorm_attempt                |
| mdl_scorm_element                |
| mdl_scorm_scoes                  |
| mdl_scorm_scoes_data             |
| mdl_scorm_scoes_value            |
| mdl_scorm_seq_mapinfo            |
| mdl_scorm_seq_objective          |
| mdl_scorm_seq_rolluprule         |
| mdl_scorm_seq_rolluprulecond     |
| mdl_scorm_seq_rulecond           |
| mdl_scorm_seq_ruleconds          |
| mdl_search_index_requests        |
| mdl_search_simpledb_index        |
| mdl_sessions                     |
| mdl_stats_daily                  |
| mdl_stats_monthly                |
| mdl_stats_user_daily             |
| mdl_stats_user_monthly           |
| mdl_stats_user_weekly            |
| mdl_stats_weekly                 |
| mdl_survey                       |
| mdl_survey_analysis              |
| mdl_survey_answers               |
| mdl_survey_questions             |
| mdl_tag                          |
| mdl_tag_area                     |
| mdl_tag_coll                     |
| mdl_tag_correlation              |
| mdl_tag_instance                 |
| mdl_task_adhoc                   |
| mdl_task_log                     |
| mdl_task_scheduled               |
| mdl_tiny_autosave                |
| mdl_tool_brickfield_areas        |
| mdl_tool_brickfield_cache_acts   |
| mdl_tool_brickfield_cache_check  |
| mdl_tool_brickfield_checks       |
| mdl_tool_brickfield_content      |
| mdl_tool_brickfield_errors       |
| mdl_tool_brickfield_process      |
| mdl_tool_brickfield_results      |
| mdl_tool_brickfield_schedule     |
| mdl_tool_brickfield_summary      |
| mdl_tool_cohortroles             |
| mdl_tool_customlang              |
| mdl_tool_customlang_components   |
| mdl_tool_dataprivacy_category    |
| mdl_tool_dataprivacy_contextlist |
| mdl_tool_dataprivacy_ctxexpired  |
| mdl_tool_dataprivacy_ctxinstance |
| mdl_tool_dataprivacy_ctxlevel    |
| mdl_tool_dataprivacy_ctxlst_ctx  |
| mdl_tool_dataprivacy_purpose     |
| mdl_tool_dataprivacy_purposerole |
| mdl_tool_dataprivacy_request     |
| mdl_tool_dataprivacy_rqst_ctxlst |
| mdl_tool_mfa                     |
| mdl_tool_mfa_auth                |
| mdl_tool_mfa_secrets             |
| mdl_tool_monitor_events          |
| mdl_tool_monitor_history         |
| mdl_tool_monitor_rules           |
| mdl_tool_monitor_subscriptions   |
| mdl_tool_policy                  |
| mdl_tool_policy_acceptances      |
| mdl_tool_policy_versions         |
| mdl_tool_recyclebin_category     |
| mdl_tool_recyclebin_course       |
| mdl_tool_usertours_steps         |
| mdl_tool_usertours_tours         |
| mdl_upgrade_log                  |
| mdl_url                          |
| mdl_user                         |
| mdl_user_devices                 |
| mdl_user_enrolments              |
| mdl_user_info_category           |
| mdl_user_info_data               |
| mdl_user_info_field              |
| mdl_user_lastaccess              |
| mdl_user_password_history        |
| mdl_user_password_resets         |
| mdl_user_preferences             |
| mdl_user_private_key             |
| mdl_wiki                         |
| mdl_wiki_links                   |
| mdl_wiki_locks                   |
| mdl_wiki_pages                   |
| mdl_wiki_subwikis                |
| mdl_wiki_synonyms                |
| mdl_wiki_versions                |
| mdl_workshop                     |
| mdl_workshop_aggregations        |
| mdl_workshop_assessments         |
| mdl_workshop_grades              |
| mdl_workshop_submissions         |
| mdl_workshopallocation_scheduled |
| mdl_workshopeval_best_settings   |
| mdl_workshopform_accumulative    |
| mdl_workshopform_comments        |
| mdl_workshopform_numerrors       |
| mdl_workshopform_numerrors_map   |
| mdl_workshopform_rubric          |
| mdl_workshopform_rubric_config   |
| mdl_workshopform_rubric_levels   |
| mdl_xapi_states                  |
+----------------------------------+
483 rows in set (0.005 sec)

```