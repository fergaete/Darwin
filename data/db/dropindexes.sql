\set log_error_verbosity terse

/*** BTree Indexes for foreign keys ***/

DROP INDEX IF EXISTS idx_possible_upper_levels_level_ref;
DROP INDEX IF EXISTS idx_possible_upper_levels_level_upper_ref;
DROP INDEX IF EXISTS idx_tag_groups_tag_ref;
DROP INDEX IF EXISTS idx_gtu_parent_ref;
DROP INDEX IF EXISTS idx_people_languages_people_ref;
DROP INDEX IF EXISTS idx_users_languages_users_ref;
DROP INDEX IF EXISTS idx_people_relationships_person_1_ref;
DROP INDEX IF EXISTS idx_people_relationships_person_2_ref;
DROP INDEX IF EXISTS idx_people_comm_person_user_ref;
DROP INDEX IF EXISTS idx_people_addresses_person_user_ref;
DROP INDEX IF EXISTS idx_users_comm_person_user_ref;
DROP INDEX IF EXISTS idx_users_addresses_person_user_ref;
DROP INDEX IF EXISTS idx_users_login_infos_user_ref;
DROP INDEX IF EXISTS idx_people_multimedia_person_user_ref;
DROP INDEX IF EXISTS idx_people_multimedia_object_ref;
DROP INDEX IF EXISTS idx_users_multimedia_person_user_ref;
DROP INDEX IF EXISTS idx_users_multimedia_object_ref;
DROP INDEX IF EXISTS idx_collections_institution_ref;
DROP INDEX IF EXISTS idx_collections_main_manager_ref;
DROP INDEX IF EXISTS idx_collections_parent_ref;
DROP INDEX IF EXISTS idx_collections_admin_collection_ref;
DROP INDEX IF EXISTS idx_collections_admin_user_ref;
DROP INDEX IF EXISTS idx_collections_rights_collection_ref;
DROP INDEX IF EXISTS idx_collections_rights_user_ref;
DROP INDEX IF EXISTS idx_collections_fields_visibilities_collection_ref;
DROP INDEX IF EXISTS idx_collections_fields_visibilities_user_ref;
DROP INDEX IF EXISTS idx_users_coll_rights_asked_collection_ref;
DROP INDEX IF EXISTS idx_users_coll_rights_asked_user_ref;
DROP INDEX IF EXISTS idx_record_visibilities;
DROP INDEX IF EXISTS idx_users_workflow_user_ref;
DROP INDEX IF EXISTS idx_users_tables_fields_tracked_user_ref;
DROP INDEX IF EXISTS idx_users_tracking_records_tracking_ref;
DROP INDEX IF EXISTS idx_collection_maintenance_user_ref;
DROP INDEX IF EXISTS idx_my_saved_searches_user_ref;
DROP INDEX IF EXISTS idx_my_preferences_user_ref;
DROP INDEX IF EXISTS idx_my_preferences_icon_ref;
DROP INDEX IF EXISTS idx_my_saved_specimens_user_ref;
DROP INDEX IF EXISTS idx_taxonomy_level_ref;
DROP INDEX IF EXISTS idx_taxonomy_parent_ref;
DROP INDEX IF EXISTS idx_taxonomy_domain_ref;
DROP INDEX IF EXISTS idx_taxonomy_kingdom_ref;
DROP INDEX IF EXISTS idx_taxonomy_super_phylum_ref;
DROP INDEX IF EXISTS idx_taxonomy_phylum_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_phylum_ref;
DROP INDEX IF EXISTS idx_taxonomy_infra_phylum_ref;
DROP INDEX IF EXISTS idx_taxonomy_super_cohort_botany_ref;
DROP INDEX IF EXISTS idx_taxonomy_cohort_botany_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_cohort_botany_ref;
DROP INDEX IF EXISTS idx_taxonomy_infra_cohort_botany_ref;
DROP INDEX IF EXISTS idx_taxonomy_super_class_ref;
DROP INDEX IF EXISTS idx_taxonomy_class_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_class_ref;
DROP INDEX IF EXISTS idx_taxonomy_infra_class_ref;
DROP INDEX IF EXISTS idx_taxonomy_super_division_ref;
DROP INDEX IF EXISTS idx_taxonomy_division_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_division_ref;
DROP INDEX IF EXISTS idx_taxonomy_infra_division_ref;
DROP INDEX IF EXISTS idx_taxonomy_super_legion_ref;
DROP INDEX IF EXISTS idx_taxonomy_legion_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_legion_ref;
DROP INDEX IF EXISTS idx_taxonomy_infra_legion_ref;
DROP INDEX IF EXISTS idx_taxonomy_super_cohort_zoology_ref;
DROP INDEX IF EXISTS idx_taxonomy_cohort_zoology_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_cohort_zoology_ref;
DROP INDEX IF EXISTS idx_taxonomy_infra_cohort_zoology_ref;
DROP INDEX IF EXISTS idx_taxonomy_super_order_ref;
DROP INDEX IF EXISTS idx_taxonomy_order_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_order_ref;
DROP INDEX IF EXISTS idx_taxonomy_infra_order_ref;
DROP INDEX IF EXISTS idx_taxonomy_section_zoology_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_section_zoology_ref;
DROP INDEX IF EXISTS idx_taxonomy_super_family_ref;
DROP INDEX IF EXISTS idx_taxonomy_family_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_family_ref;
DROP INDEX IF EXISTS idx_taxonomy_infra_family_ref;
DROP INDEX IF EXISTS idx_taxonomy_super_tribe_ref;
DROP INDEX IF EXISTS idx_taxonomy_tribe_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_tribe_ref;
DROP INDEX IF EXISTS idx_taxonomy_infra_tribe_ref;
DROP INDEX IF EXISTS idx_taxonomy_genus_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_genus_ref;
DROP INDEX IF EXISTS idx_taxonomy_section_botany_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_section_botany_ref;
DROP INDEX IF EXISTS idx_taxonomy_serie_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_serie_ref;
DROP INDEX IF EXISTS idx_taxonomy_super_species_ref;
DROP INDEX IF EXISTS idx_taxonomy_species_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_species_ref;
DROP INDEX IF EXISTS idx_taxonomy_variety_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_variety_ref;
DROP INDEX IF EXISTS idx_taxonomy_form_ref;
DROP INDEX IF EXISTS idx_taxonomy_sub_form_ref;
DROP INDEX IF EXISTS idx_taxonomy_abberans_ref;
DROP INDEX IF EXISTS idx_chronostratigraphy_level_ref;
DROP INDEX IF EXISTS idx_chronostratigraphy_parent_ref;
DROP INDEX IF EXISTS idx_chronostratigraphy_eon_ref;
DROP INDEX IF EXISTS idx_chronostratigraphy_era_ref;
DROP INDEX IF EXISTS idx_chronostratigraphy_sub_era_ref;
DROP INDEX IF EXISTS idx_chronostratigraphy_system_ref;
DROP INDEX IF EXISTS idx_chronostratigraphy_serie_ref;
DROP INDEX IF EXISTS idx_chronostratigraphy_stage_ref;
DROP INDEX IF EXISTS idx_chronostratigraphy_sub_stage_ref;
DROP INDEX IF EXISTS idx_chronostratigraphy_sub_level_1_ref;
DROP INDEX IF EXISTS idx_chronostratigraphy_sub_level_2_ref;
DROP INDEX IF EXISTS idx_lithostratigraphy_level_ref;
DROP INDEX IF EXISTS idx_lithostratigraphy_parent_ref;
DROP INDEX IF EXISTS idx_lithostratigraphy_group_ref;
DROP INDEX IF EXISTS idx_lithostratigraphy_formation_ref;
DROP INDEX IF EXISTS idx_lithostratigraphy_member_ref;
DROP INDEX IF EXISTS idx_lithostratigraphy_layer_ref;
DROP INDEX IF EXISTS idx_lithostratigraphy_sub_level_1_ref;
DROP INDEX IF EXISTS idx_lithostratigraphy_sub_level_2_ref;
DROP INDEX IF EXISTS idx_mineralogy_level_ref;
DROP INDEX IF EXISTS idx_mineralogy_parent_ref;
DROP INDEX IF EXISTS idx_mineralogy_unit_class_ref;
DROP INDEX IF EXISTS idx_mineralogy_unit_division_ref;
DROP INDEX IF EXISTS idx_mineralogy_unit_family_ref;
DROP INDEX IF EXISTS idx_mineralogy_unit_group_ref;
DROP INDEX IF EXISTS idx_mineralogy_unit_variety_ref;
DROP INDEX IF EXISTS idx_lithology_level_ref;
DROP INDEX IF EXISTS idx_lithology_parent_ref;
DROP INDEX IF EXISTS idx_people_aliases_collection_ref;
DROP INDEX IF EXISTS idx_people_aliases_person_ref;
DROP INDEX IF EXISTS idx_multimedia_keywords_object_ref;
DROP INDEX IF EXISTS idx_soortenregister_taxa_ref;
DROP INDEX IF EXISTS idx_soortenregister_gtu_ref;
DROP INDEX IF EXISTS idx_soortenregister_habitat_ref;
DROP INDEX IF EXISTS idx_specimens_collection_ref;
DROP INDEX IF EXISTS idx_specimens_expedition_ref;
DROP INDEX IF EXISTS idx_specimens_gtu_ref;
DROP INDEX IF EXISTS idx_specimens_taxon_ref;
DROP INDEX IF EXISTS idx_specimens_litho_ref;
DROP INDEX IF EXISTS idx_specimens_chrono_ref;
DROP INDEX IF EXISTS idx_specimens_lithology_ref;
DROP INDEX IF EXISTS idx_specimens_mineral_ref;
DROP INDEX IF EXISTS idx_specimens_identification_taxon_ref;
DROP INDEX IF EXISTS idx_specimens_host_taxon_ref;
DROP INDEX IF EXISTS idx_specimens_host_specimen_ref;
DROP INDEX IF EXISTS idx_specimens_codes_specimen_ref;
DROP INDEX IF EXISTS idx_multimedia_codes_multimedia_ref;
DROP INDEX IF EXISTS idx_specimen_individuals_specimen_ref;
DROP INDEX IF EXISTS idx_specimen_parts_specimen_individual_ref;
DROP INDEX IF EXISTS idx_specimen_parts_codes_specimen_part_ref;
DROP INDEX IF EXISTS idx_specimen_parts_insurances_specimen_part_ref;
DROP INDEX IF EXISTS idx_specimen_parts_insurances_insurer_ref;
DROP INDEX IF EXISTS idx_associated_multimedia_multimedia_ref;
DROP INDEX IF EXISTS idx_specimens_accompanying_specimen_ref;
DROP INDEX IF EXISTS idx_specimens_accompanying_taxon_ref;
DROP INDEX IF EXISTS idx_specimens_accompanying_mineral_ref;

/*** GiST and eventual GIN Indexes for ts_vector fields ***/

DROP INDEX IF EXISTS idx_gist_comments_comment_ts;
DROP INDEX IF EXISTS idx_gin_identifications_value_defined_ts;
DROP INDEX IF EXISTS idx_gist_vernacular_names_name_ts;
DROP INDEX IF EXISTS idx_gist_expeditions_name_ts;
DROP INDEX IF EXISTS idx_gin_people_formated_name_ts;
DROP INDEX IF EXISTS idx_gin_users_formated_name_ts;
DROP INDEX IF EXISTS idx_gist_multimedia_descriptive_ts;
DROP INDEX IF EXISTS idx_gin_people_addresses_address_parts_ts;
DROP INDEX IF EXISTS idx_gin_users_addresses_address_parts_ts;
DROP INDEX IF EXISTS idx_gist_collection_maintenance_description_ts;
DROP INDEX IF EXISTS idx_gist_habitats_description_ts;

/*** BTree Indexes for _indexed fields used for searches purposes ***/

DROP INDEX IF EXISTS idx_tag_groups_group_name_indexed;
DROP INDEX IF EXISTS idx_catalogue_properties_property_types_sub_types;
DROP INDEX IF EXISTS idx_catalogue_properties_property_method_indexed;
DROP INDEX IF EXISTS idx_catalogue_properties_property_tool_indexed;
DROP INDEX IF EXISTS idx_taxonomy_naming;
DROP INDEX IF EXISTS idx_taxonomy_domain_indexed;
DROP INDEX IF EXISTS idx_taxonomy_kingdom_indexed;
DROP INDEX IF EXISTS idx_taxonomy_super_phylum_indexed;
DROP INDEX IF EXISTS idx_taxonomy_phylum_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_phylum_indexed;
DROP INDEX IF EXISTS idx_taxonomy_infra_phylum_indexed;
DROP INDEX IF EXISTS idx_taxonomy_super_cohort_botany_indexed;
DROP INDEX IF EXISTS idx_taxonomy_cohort_botany_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_cohort_botany_indexed;
DROP INDEX IF EXISTS idx_taxonomy_infra_cohort_botany_indexed;
DROP INDEX IF EXISTS idx_taxonomy_super_class_indexed;
DROP INDEX IF EXISTS idx_taxonomy_class_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_class_indexed;
DROP INDEX IF EXISTS idx_taxonomy_infra_class_indexed;
DROP INDEX IF EXISTS idx_taxonomy_super_division_indexed;
DROP INDEX IF EXISTS idx_taxonomy_division_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_division_indexed;
DROP INDEX IF EXISTS idx_taxonomy_infra_division_indexed;
DROP INDEX IF EXISTS idx_taxonomy_super_legion_indexed;
DROP INDEX IF EXISTS idx_taxonomy_legion_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_legion_indexed;
DROP INDEX IF EXISTS idx_taxonomy_infra_legion_indexed;
DROP INDEX IF EXISTS idx_taxonomy_super_cohort_zoology_indexed;
DROP INDEX IF EXISTS idx_taxonomy_cohort_zoology_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_cohort_zoology_indexed;
DROP INDEX IF EXISTS idx_taxonomy_infra_cohort_zoology_indexed;
DROP INDEX IF EXISTS idx_taxonomy_super_order_indexed;
DROP INDEX IF EXISTS idx_taxonomy_order_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_order_indexed;
DROP INDEX IF EXISTS idx_taxonomy_infra_order_indexed;
DROP INDEX IF EXISTS idx_taxonomy_section_zoology_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_section_zoology_indexed;
DROP INDEX IF EXISTS idx_taxonomy_super_family_indexed;
DROP INDEX IF EXISTS idx_taxonomy_family_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_family_indexed;
DROP INDEX IF EXISTS idx_taxonomy_infra_family_indexed;
DROP INDEX IF EXISTS idx_taxonomy_super_tribe_indexed;
DROP INDEX IF EXISTS idx_taxonomy_tribe_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_tribe_indexed;
DROP INDEX IF EXISTS idx_taxonomy_infra_tribe_indexed;
DROP INDEX IF EXISTS idx_taxonomy_genus_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_genus_indexed;
DROP INDEX IF EXISTS idx_taxonomy_section_botany_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_section_botany_indexed;
DROP INDEX IF EXISTS idx_taxonomy_serie_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_serie_indexed;
DROP INDEX IF EXISTS idx_taxonomy_super_species_indexed;
DROP INDEX IF EXISTS idx_taxonomy_species_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_species_indexed;
DROP INDEX IF EXISTS idx_taxonomy_variety_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_variety_indexed;
DROP INDEX IF EXISTS idx_taxonomy_form_indexed;
DROP INDEX IF EXISTS idx_taxonomy_sub_form_indexed;
DROP INDEX IF EXISTS idx_taxonomy_abberans_indexed;
DROP INDEX IF EXISTS idx_chronostratigraphy_naming;
DROP INDEX IF EXISTS idx_chronostratigraphy_eon_indexed;
DROP INDEX IF EXISTS idx_chronostratigraphy_era_indexed;
DROP INDEX IF EXISTS idx_chronostratigraphy_sub_era_indexed;
DROP INDEX IF EXISTS idx_chronostratigraphy_system_indexed;
DROP INDEX IF EXISTS idx_chronostratigraphy_serie_indexed;
DROP INDEX IF EXISTS idx_chronostratigraphy_stage_indexed;
DROP INDEX IF EXISTS idx_chronostratigraphy_sub_stage_indexed;
DROP INDEX IF EXISTS idx_chronostratigraphy_sub_level_1_indexed;
DROP INDEX IF EXISTS idx_chronostratigraphy_sub_level_2_indexed;
DROP INDEX IF EXISTS idx_lithostratigraphy_naming;
DROP INDEX IF EXISTS idx_lithostratigraphy_group_indexed;
DROP INDEX IF EXISTS idx_lithostratigraphy_formation_indexed;
DROP INDEX IF EXISTS idx_lithostratigraphy_member_indexed;
DROP INDEX IF EXISTS idx_lithostratigraphy_layer_indexed;
DROP INDEX IF EXISTS idx_lithostratigraphy_sub_level_1_indexed;
DROP INDEX IF EXISTS idx_lithostratigraphy_sub_level_2_indexed;
DROP INDEX IF EXISTS idx_mineralogy_naming;
DROP INDEX IF EXISTS idx_mineralogy_unit_class_indexed;
DROP INDEX IF EXISTS idx_mineralogy_unit_division_indexed;
DROP INDEX IF EXISTS idx_mineralogy_unit_family_indexed;
DROP INDEX IF EXISTS idx_mineralogy_unit_group_indexed;
DROP INDEX IF EXISTS idx_mineralogy_unit_variety_indexed;
DROP INDEX IF EXISTS idx_lithology_naming;
DROP INDEX IF EXISTS idx_multimedia_keywords_keyword_indexed;
DROP INDEX IF EXISTS idx_specimens_codes_code_prefix;
DROP INDEX IF EXISTS idx_specimens_codes_code_suffix;
DROP INDEX IF EXISTS idx_specimens_codes_code;
DROP INDEX IF EXISTS idx_multimedia_codes_code_prefix;
DROP INDEX IF EXISTS idx_multimedia_codes_code_suffix;
DROP INDEX IF EXISTS idx_multimedia_codes_code;
DROP INDEX IF EXISTS idx_specimen_parts_codes_code_prefix;
DROP INDEX IF EXISTS idx_specimen_parts_codes_code_suffix;
DROP INDEX IF EXISTS idx_specimen_parts_codes_code;

/*** BTree Indexes used on non indexed fields for search purposes ***/

DROP INDEX IF EXISTS idx_specimen_individuals_type_search;
DROP INDEX IF EXISTS idx_specimen_individuals_type;
DROP INDEX IF EXISTS idx_specimen_individuals_sex;
DROP INDEX IF EXISTS idx_specimen_individuals_stage;
DROP INDEX IF EXISTS idx_specimen_individuals_state;
DROP INDEX IF EXISTS idx_specimen_individuals_social_status;
DROP INDEX IF EXISTS idx_specimen_individuals_rock_form;
DROP INDEX IF EXISTS idx_specimen_parts_specimen_part;
DROP INDEX IF EXISTS idx_specimen_parts_room;
DROP INDEX IF EXISTS idx_specimen_parts_row;
DROP INDEX IF EXISTS idx_specimen_parts_shelf;
DROP INDEX IF EXISTS idx_specimen_parts_container;
DROP INDEX IF EXISTS idx_specimen_parts_sub_container;
DROP INDEX IF EXISTS idx_class_vernacular_names_community;
DROP INDEX IF EXISTS idx_multimedia_is_digital;
DROP INDEX IF EXISTS idx_multimedia_type;
DROP INDEX IF EXISTS idx_collections_fields_visibilities_searchable;
DROP INDEX IF EXISTS idx_collections_fields_visibilities_visible;
DROP INDEX IF EXISTS idx_record_visibilities_visible;
DROP INDEX IF EXISTS idx_users_workflow_user_status;
DROP INDEX IF EXISTS idx_my_preferences_user_category;
DROP INDEX IF EXISTS idx_collections_collection_type;

/*** GiST Indexes created for array manipulations ***/

-- !!! Additional modules will have to be installed if this functionality is needed !!!


/*** Additional BTree Indexes created to fasten application ***/



