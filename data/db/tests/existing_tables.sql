\unset ECHO
\i unit_launch.sql
-- Plan the tests.
SELECT plan(48);

-- Run the tests.
SELECT has_table('catalogue_relationships','catalogue_relationships exists');
SELECT has_table('template_table_record_ref','template_table_record_ref exists');
SELECT has_table('catalogue_people','catalogue_people exists');
SELECT has_table('catalogue_levels','catalogue_levels exists');
SELECT has_table('possible_upper_levels','possible_upper_levels exists');
SELECT has_table('comments','comments exists');
SELECT has_table('tag_groups','tag_groups exists');
SELECT has_table('gtu','gtu exists');
SELECT has_table('catalogue_properties','catalogue_properties exists');
SELECT has_table('identifications','identifications exists');
SELECT has_table('class_vernacular_names','class_vernacular_names exists');
SELECT has_table('vernacular_names','vernacular_names exists');
SELECT has_table('expeditions','expeditions exists');
SELECT has_table('template_people','template_people exists');
SELECT has_table('template_people_languages','template_people_languages exists');
SELECT has_table('people','people exists');
SELECT has_table('users','users exists');
SELECT has_table('people_languages','people_languages exists');
SELECT has_table('multimedia','multimedia exists');
SELECT has_table('template_people_users_comm_common','template_people_users_comm_common exists');
SELECT has_table('template_people_users_rel_common','template_people_users_rel_common exists');
SELECT has_table('template_people_users_addr_common','template_people_users_addr_common exists');
SELECT has_table('people_relationships','people_relationships exists');
SELECT has_table('people_comm','people_comm exists');
SELECT has_table('people_addresses','people_addresses exists');
SELECT has_table('users_comm','users_comm exists');
SELECT has_table('users_addresses','users_addresses exists');
SELECT has_table('users_login_infos','users_login_infos exists');
SELECT has_table('collections','collections exists');
SELECT has_table('template_collections_users','template_collections_users exists');
SELECT has_table('collections_rights','collections_rights exists');
SELECT has_table('informative_workflow','informative_workflow exists');
SELECT has_table('users_tracking','users_tracking exists');
SELECT has_table('collection_maintenance','collection_maintenance exists');
SELECT has_table('my_saved_searches','my_saved_searches exists');
SELECT has_table('my_widgets','my_widgets exists');
SELECT has_table('template_classifications','template_classifications exists');
SELECT has_table('taxonomy','taxonomy exists');
SELECT has_table('chronostratigraphy','chronostratigraphy exists');
SELECT has_table('lithostratigraphy','lithostratigraphy exists');
SELECT has_table('mineralogy','mineralogy exists');
SELECT has_table('lithology','lithology exists');
SELECT has_table('specimens','specimens exists');
SELECT has_table('codes','codes exists');
SELECT has_table('specimen_individuals','specimen_individuals exists');
SELECT has_table('specimen_parts','specimen_parts exists');
SELECT has_table('insurances', 'insurances exists');
/*SELECT has_table('igs', 'igs exists');*/
SELECT has_table('specimens_accompanying','specimens_accompanying exists');

-- Finish the tests and clean up.
SELECT * FROM finish();
ROLLBACK;
