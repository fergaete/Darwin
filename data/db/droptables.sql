\set log_error_verbosity terse

DROP TABLE  IF EXISTS catalogue_relationships CASCADE;
DROP TABLE  IF EXISTS template_table_record_ref CASCADE;
DROP TABLE  IF EXISTS catalogue_authors CASCADE;
DROP TABLE  IF EXISTS catalogue_levels CASCADE;
DROP TABLE  IF EXISTS possible_upper_levels CASCADE;
DROP TABLE  IF EXISTS comments CASCADE;
DROP TABLE  IF EXISTS tags CASCADE;
DROP TABLE  IF EXISTS tag_groups CASCADE;
DROP TABLE  IF EXISTS gtu CASCADE;
DROP TABLE  IF EXISTS gtu_tags CASCADE;
DROP TABLE  IF EXISTS catalogue_properties CASCADE;
DROP TABLE  IF EXISTS identifications CASCADE;
DROP TABLE  IF EXISTS expertises CASCADE;
DROP TABLE  IF EXISTS class_vernacular_names CASCADE;
DROP TABLE  IF EXISTS vernacular_names CASCADE;
DROP TABLE  IF EXISTS expeditions CASCADE;
DROP TABLE  IF EXISTS template_people CASCADE;
DROP TABLE  IF EXISTS template_people_languages CASCADE;
DROP TABLE  IF EXISTS people CASCADE;
DROP TABLE  IF EXISTS users CASCADE;
DROP TABLE  IF EXISTS people_languages CASCADE;
DROP TABLE  IF EXISTS users_languages CASCADE;
DROP TABLE  IF EXISTS multimedia CASCADE;
DROP TABLE  IF EXISTS template_people_users_comm_common CASCADE;
DROP TABLE  IF EXISTS template_people_users_rel_common CASCADE;
DROP TABLE  IF EXISTS template_people_users_addr_common CASCADE;
DROP TABLE  IF EXISTS people_relationships CASCADE;
DROP TABLE  IF EXISTS people_comm CASCADE;
DROP TABLE  IF EXISTS people_addresses CASCADE;
DROP TABLE  IF EXISTS users_comm CASCADE;
DROP TABLE  IF EXISTS users_addresses CASCADE;
DROP TABLE  IF EXISTS users_login_infos CASCADE;
DROP TABLE  IF EXISTS template_people_users_multimedia CASCADE;
DROP TABLE  IF EXISTS people_multimedia CASCADE;
DROP TABLE  IF EXISTS users_multimedia CASCADE;
DROP TABLE  IF EXISTS collections CASCADE;
DROP TABLE  IF EXISTS template_collections_users CASCADE;
DROP TABLE  IF EXISTS collections_admin CASCADE;
DROP TABLE  IF EXISTS collections_rights CASCADE;
DROP TABLE  IF EXISTS collections_fields_visibilities CASCADE;
DROP TABLE  IF EXISTS users_coll_rights_asked CASCADE;
DROP TABLE  IF EXISTS record_visibilities CASCADE;
DROP TABLE  IF EXISTS users_workflow CASCADE;
DROP TABLE  IF EXISTS users_tables_fields_tracked CASCADE;
DROP TABLE  IF EXISTS users_tracking CASCADE;
DROP TABLE  IF EXISTS users_tracking_records CASCADE;
DROP TABLE  IF EXISTS collection_maintenance CASCADE;
DROP TABLE  IF EXISTS my_saved_searches CASCADE;
DROP TABLE  IF EXISTS my_preferences CASCADE;
DROP TABLE  IF EXISTS my_saved_specimens CASCADE;
DROP TABLE  IF EXISTS template_classifications CASCADE;
DROP TABLE  IF EXISTS taxonomy CASCADE;
DROP TABLE  IF EXISTS people_aliases CASCADE;
DROP TABLE  IF EXISTS chronostratigraphy CASCADE;
DROP TABLE  IF EXISTS lithostratigraphy CASCADE;
DROP TABLE  IF EXISTS mineralogy CASCADE;
DROP TABLE  IF EXISTS lithology CASCADE;
DROP TABLE  IF EXISTS habitats CASCADE;
DROP TABLE  IF EXISTS multimedia_keywords CASCADE;
DROP TABLE  IF EXISTS soortenregister CASCADE;
DROP TABLE  IF EXISTS specimens CASCADE;
DROP TABLE  IF EXISTS template_codes CASCADE;
DROP TABLE  IF EXISTS specimens_codes CASCADE;
DROP TABLE  IF EXISTS multimedia_codes CASCADE;
DROP TABLE  IF EXISTS specimen_individuals CASCADE;
DROP TABLE  IF EXISTS specimen_parts CASCADE;
DROP TABLE  IF EXISTS specimen_parts_codes CASCADE;
DROP TABLE  IF EXISTS specimen_parts_insurances CASCADE;
DROP TABLE  IF EXISTS associated_multimedia CASCADE;
DROP TABLE  IF EXISTS specimens_accompanying CASCADE;