CREATE ROLE d2viewer ENCRYPTED PASSWORD 'viewer2d2' NOSUPERUSER NOCREATEDB NOCREATEROLE INHERIT LOGIN; 
 GRANT USAGE ON SCHEMA darwin2 TO d2viewer;
 GRANT SELECT ON darwin2.template_people TO d2viewer;
 GRANT SELECT ON darwin2.template_people_languages TO d2viewer;
 GRANT SELECT ON darwin2.catalogue_relationships TO d2viewer;
 GRANT SELECT ON darwin2.people TO d2viewer;
 GRANT SELECT ON darwin2.catalogue_levels TO d2viewer;
 GRANT SELECT ON darwin2.possible_upper_levels TO d2viewer;
 GRANT SELECT ON darwin2.catalogue_people TO d2viewer;
 GRANT SELECT ON darwin2.ext_links TO d2viewer;
 GRANT SELECT ON darwin2.template_table_record_ref TO d2viewer;
 GRANT SELECT ON darwin2.comments TO d2viewer;
 GRANT SELECT ON darwin2.tags TO d2viewer;
 GRANT SELECT ON darwin2.tag_groups TO d2viewer;
 GRANT SELECT ON darwin2.catalogue_properties TO d2viewer;
 GRANT SELECT ON darwin2.class_vernacular_names TO d2viewer;
 GRANT SELECT ON darwin2.identifications TO d2viewer;
 GRANT SELECT ON darwin2.expeditions TO d2viewer;
 GRANT SELECT ON darwin2.vernacular_names TO d2viewer;
 GRANT SELECT ON darwin2.properties_values TO d2viewer;
 GRANT SELECT ON darwin2.users_languages TO d2viewer;
 GRANT SELECT ON darwin2.people_relationships TO d2viewer;
 GRANT SELECT ON darwin2.template_people_users_comm_common TO d2viewer;
 GRANT SELECT ON darwin2.people_languages TO d2viewer;
 GRANT SELECT ON darwin2.template_people_users_rel_common TO d2viewer;
 GRANT SELECT ON darwin2.people_comm TO d2viewer;
 GRANT SELECT ON darwin2.people_addresses TO d2viewer;
 GRANT SELECT ON darwin2.template_people_users_addr_common TO d2viewer;
 GRANT SELECT ON darwin2.users_comm TO d2viewer;
 GRANT SELECT ON darwin2.users_login_infos TO d2viewer;
 GRANT SELECT ON darwin2.multimedia TO d2viewer;
 GRANT SELECT ON darwin2.users_workflow TO d2viewer;
 GRANT SELECT ON darwin2.people_multimedia TO d2viewer;
 GRANT SELECT ON darwin2.template_people_users_multimedia TO d2viewer;
 GRANT SELECT ON darwin2.collections TO d2viewer;
 GRANT SELECT ON darwin2.collections_rights TO d2viewer;
 GRANT SELECT ON darwin2.users_multimedia TO d2viewer;
 GRANT SELECT ON darwin2.template_collections_users TO d2viewer;
 GRANT SELECT ON darwin2.users_tracking TO d2viewer;
 GRANT SELECT ON darwin2.users_addresses TO d2viewer;
 GRANT SELECT ON darwin2.collection_maintenance TO d2viewer;
 GRANT SELECT ON darwin2.my_saved_searches TO d2viewer;
 GRANT SELECT ON darwin2.classification_synonymies TO d2viewer;
 GRANT SELECT ON darwin2.classification_keywords TO d2viewer;
 GRANT SELECT ON darwin2.chronostratigraphy TO d2viewer;
 GRANT SELECT ON darwin2.my_widgets TO d2viewer;
 GRANT SELECT ON darwin2.users TO d2viewer;
 GRANT SELECT ON darwin2.template_classifications TO d2viewer;
 GRANT SELECT ON darwin2.taxonomy TO d2viewer;
 GRANT SELECT ON darwin2.soortenregister TO d2viewer;
 GRANT SELECT ON darwin2.multimedia_keywords TO d2viewer;
 GRANT SELECT ON darwin2.gtu TO d2viewer;
 GRANT SELECT ON darwin2.lithostratigraphy TO d2viewer;
 GRANT SELECT ON darwin2.habitats TO d2viewer;
 GRANT SELECT ON darwin2.lithology TO d2viewer;
 GRANT SELECT ON darwin2.insurances TO d2viewer;
 GRANT SELECT ON darwin2.specimen_parts TO d2viewer;
 GRANT SELECT ON darwin2.specimen_individuals TO d2viewer;
 GRANT SELECT ON darwin2.mineralogy TO d2viewer;
 GRANT SELECT ON darwin2.associated_multimedia TO d2viewer;
 GRANT SELECT ON darwin2.igs TO d2viewer;
 GRANT SELECT ON darwin2.specimens_accompanying TO d2viewer;
 GRANT SELECT ON darwin2.codes TO d2viewer;
 GRANT SELECT ON darwin2.specimen_collecting_tools TO d2viewer;
 GRANT SELECT ON darwin2.collecting_methods TO d2viewer;
 GRANT SELECT ON darwin2.darwin_flat TO d2viewer;
 GRANT SELECT ON darwin2.specimen_collecting_methods TO d2viewer;
 GRANT SELECT ON darwin2.specimens TO d2viewer;
 GRANT SELECT ON darwin2.words TO d2viewer;
 GRANT SELECT ON darwin2.preferences TO d2viewer;
 GRANT SELECT ON darwin2.flat_dict TO d2viewer;
 GRANT SELECT ON darwin2.collecting_tools TO d2viewer;
 GRANT SELECT ON darwin2.imports TO d2viewer;
 GRANT SELECT ON darwin2.staging_tag_groups TO d2viewer;
 GRANT SELECT ON darwin2.staging TO d2viewer;
 ALTER USER d2viewer SET search_path TO darwin2, public;
