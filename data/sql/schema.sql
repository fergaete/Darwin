CREATE TABLE specimen_parts (id BIGINT, specimen_individual_ref BIGINT NOT NULL, specimen_part TEXT DEFAULT 'specimen' NOT NULL, complete BOOLEAN DEFAULT 'true' NOT NULL, building TEXT, floor TEXT, room TEXT, row TEXT, shelf TEXT, container TEXT, sub_container TEXT, container_type TEXT DEFAULT 'container' NOT NULL, sub_container_type TEXT DEFAULT 'container' NOT NULL, storage TEXT DEFAULT 'dry' NOT NULL, surnumerary BOOLEAN DEFAULT 'false' NOT NULL, specimen_status TEXT DEFAULT 'good state' NOT NULL, specimen_part_count_min BIGINT DEFAULT 1 NOT NULL, specimen_part_count_max BIGINT DEFAULT 1 NOT NULL, PRIMARY KEY(id));
CREATE TABLE users (id BIGINT, is_physical BOOLEAN NOT NULL, sub_type TEXT, public_class VARCHAR(255), formated_name TEXT, formated_name_indexed TEXT, formated_name_ts TEXT, title TEXT NOT NULL, family_name TEXT NOT NULL, given_name TEXT, additional_names TEXT, birth_date_mask BIGINT DEFAULT 0 NOT NULL, birth_date DATE, gender VARCHAR(255), db_user_type BIGINT DEFAULT 1 NOT NULL, PRIMARY KEY(id));
CREATE TABLE people_relationships (id BIGSERIAL, relationship_type TEXT DEFAULT 'belongs to' NOT NULL, person_1_ref BIGINT NOT NULL, person_2_ref BIGINT NOT NULL, person_title TEXT, path TEXT, organization_unit TEXT, person_user_role TEXT, activity_period TEXT, PRIMARY KEY(id));
CREATE TABLE expertises (table_name TEXT, record_id BIGINT, expert_ref BIGINT NOT NULL, defined_by_ordered_ids_list TEXT, order_by TEXT, PRIMARY KEY(table_name, record_id));
CREATE TABLE people_addresses (id BIGINT, person_user_ref BIGINT NOT NULL, tag TEXT NOT NULL, organization_unit TEXT, person_user_role TEXT, activity_period TEXT, po_box TEXT, extended_address TEXT, locality TEXT NOT NULL, region TEXT, zip_code TEXT, country TEXT NOT NULL, address_parts_ts TEXT, PRIMARY KEY(id));
CREATE TABLE class_vernacular_names (id BIGINT, table_name TEXT NOT NULL, record_id BIGINT NOT NULL, community TEXT NOT NULL, PRIMARY KEY(id));
CREATE TABLE users_tables_fields_tracked (id BIGSERIAL, table_name TEXT NOT NULL, field_name TEXT NOT NULL, user_ref BIGINT NOT NULL, PRIMARY KEY(id));
CREATE TABLE chronostratigraphy (id BIGINT, name TEXT NOT NULL, name_indexed TEXT, description_year BIGINT, description_year_compl VARCHAR(2), level_ref BIGINT, status TEXT DEFAULT 'valid' NOT NULL, path TEXT DEFAULT '/' NOT NULL, parent_ref BIGINT DEFAULT 0 NOT NULL, eon_ref BIGINT DEFAULT 0 NOT NULL, eon_indexed TEXT DEFAULT '' NOT NULL, era_ref BIGINT DEFAULT 0 NOT NULL, era_indexed TEXT DEFAULT '' NOT NULL, sub_era_ref BIGINT DEFAULT 0 NOT NULL, sub_era_indexed TEXT DEFAULT '' NOT NULL, system_ref BIGINT DEFAULT 0 NOT NULL, system_indexed TEXT DEFAULT '' NOT NULL, serie_ref BIGINT DEFAULT 0 NOT NULL, serie_indexed TEXT DEFAULT '' NOT NULL, stage_ref BIGINT DEFAULT 0 NOT NULL, stage_indexed TEXT DEFAULT '' NOT NULL, sub_stage_ref BIGINT DEFAULT 0 NOT NULL, sub_stage_indexed TEXT DEFAULT '' NOT NULL, sub_level_1_ref BIGINT DEFAULT 0 NOT NULL, sub_level_1_indexed TEXT DEFAULT '' NOT NULL, sub_level_2_ref BIGINT DEFAULT 0 NOT NULL, sub_level_2_indexed TEXT DEFAULT '' NOT NULL, lower_bound BIGINT, upper_bound BIGINT, PRIMARY KEY(id));
CREATE TABLE collections_fields_visibilities (id BIGSERIAL, collection_ref BIGINT DEFAULT 0 NOT NULL, user_ref BIGINT DEFAULT 0 NOT NULL, field_group_name TEXT NOT NULL, db_user_type BIGINT DEFAULT 1 NOT NULL, searchable BOOLEAN DEFAULT 'true' NOT NULL, visible BOOLEAN DEFAULT 'true' NOT NULL, PRIMARY KEY(id));
CREATE TABLE specimens_accompanying (id BIGSERIAL, type TEXT DEFAULT 'secondary' NOT NULL, specimen_ref BIGINT NOT NULL, taxon_ref BIGINT DEFAULT 0 NOT NULL, mineral_ref BIGINT DEFAULT 0 NOT NULL, form TEXT, quantity FLOAT, unit TEXT DEFAULT '%' NOT NULL, PRIMARY KEY(id));
CREATE TABLE associated_multimedia (id BIGINT, table_name TEXT NOT NULL, record_id BIGINT NOT NULL, multimedia_ref BIGINT NOT NULL, PRIMARY KEY(id));
CREATE TABLE lithology (id BIGINT, name TEXT NOT NULL, name_indexed TEXT, description_year BIGINT, description_year_compl VARCHAR(2), level_ref BIGINT, status TEXT DEFAULT 'valid' NOT NULL, path TEXT DEFAULT '/' NOT NULL, parent_ref BIGINT DEFAULT 0 NOT NULL, unit_main_group_ref BIGINT DEFAULT 0 NOT NULL, unit_main_group_indexed TEXT DEFAULT '' NOT NULL, unit_group_ref BIGINT DEFAULT 0 NOT NULL, unit_group_indexed TEXT DEFAULT '' NOT NULL, unit_sub_group_ref BIGINT DEFAULT 0 NOT NULL, unit_sub_group_indexed TEXT DEFAULT '' NOT NULL, unit_rock_ref BIGINT DEFAULT 0 NOT NULL, unit_rock_indexed TEXT DEFAULT '' NOT NULL, PRIMARY KEY(id));
CREATE TABLE possible_upper_levels (id BIGSERIAL, level_ref BIGINT NOT NULL, level_upper_ref BIGINT NOT NULL, PRIMARY KEY(id));
CREATE TABLE vernacular_names (vernacular_class_ref BIGINT, name TEXT NOT NULL, name_ts TEXT, country_language_full_text TEXT, PRIMARY KEY(vernacular_class_ref));
CREATE TABLE lithostratigraphy (id BIGINT, name TEXT NOT NULL, name_indexed TEXT, description_year BIGINT, description_year_compl VARCHAR(2), level_ref BIGINT, status TEXT DEFAULT 'valid' NOT NULL, path TEXT DEFAULT '/' NOT NULL, parent_ref BIGINT DEFAULT 0 NOT NULL, group_ref BIGINT DEFAULT 0 NOT NULL, group_indexed TEXT DEFAULT '' NOT NULL, formation_ref BIGINT DEFAULT 0 NOT NULL, formation_indexed TEXT DEFAULT '' NOT NULL, member_ref BIGINT DEFAULT 0 NOT NULL, member_indexed TEXT DEFAULT '' NOT NULL, layer_ref BIGINT DEFAULT 0 NOT NULL, layer_indexed TEXT DEFAULT '' NOT NULL, sub_level_1_ref BIGINT DEFAULT 0 NOT NULL, sub_level_1_indexed TEXT DEFAULT '' NOT NULL, sub_level_2_ref BIGINT DEFAULT 0 NOT NULL, sub_level_2_indexed TEXT DEFAULT '' NOT NULL, PRIMARY KEY(id));
CREATE TABLE people_languages (id BIGSERIAL, people_ref BIGINT NOT NULL, language_country TEXT DEFAULT 'en_gb' NOT NULL, mother BOOLEAN DEFAULT 'true' NOT NULL, prefered_language BOOLEAN DEFAULT 'false' NOT NULL, PRIMARY KEY(id));
CREATE TABLE users_addresses (id BIGINT, person_user_ref BIGINT NOT NULL, tag TEXT NOT NULL, organization_unit TEXT, person_user_role TEXT, activity_period TEXT, po_box TEXT, extended_address TEXT, locality TEXT NOT NULL, region TEXT, zip_code TEXT, country TEXT NOT NULL, address_parts_ts TEXT, PRIMARY KEY(id));
CREATE TABLE users_tracking_records (id BIGSERIAL, tracking_ref BIGINT NOT NULL, field_name TEXT NOT NULL, old_value TEXT, new_value TEXT, PRIMARY KEY(id));
CREATE TABLE my_preferences (id BIGSERIAL, user_ref BIGINT NOT NULL, category TEXT DEFAULT 'board_widget' NOT NULL, group_name TEXT NOT NULL, order_by BIGINT DEFAULT 1 NOT NULL, col_num BIGINT DEFAULT 1 NOT NULL, mandatory BOOLEAN DEFAULT 'false' NOT NULL, visible BOOLEAN DEFAULT 'true' NOT NULL, opened BOOLEAN DEFAULT 'true' NOT NULL, color TEXT DEFAULT '#5BAABD', icon_ref BIGINT, title_perso TEXT, PRIMARY KEY(id));
CREATE TABLE habitats (id BIGINT, name TEXT NOT NULL, path TEXT DEFAULT '/' NOT NULL, code TEXT NOT NULL, code_indexed TEXT DEFAULT '/', description TEXT NOT NULL, description_ts TEXT, description_language_full_text TEXT, habitat_system TEXT DEFAULT 'eunis' NOT NULL, PRIMARY KEY(id));
CREATE TABLE multimedia (id BIGINT, is_digital BOOLEAN NOT NULL, type TEXT DEFAULT 'image' NOT NULL, sub_type TEXT, title TEXT NOT NULL, title_indexed TEXT, subject TEXT DEFAULT '/' NOT NULL, coverage TEXT DEFAULT 'temporal' NOT NULL, apercu_path TEXT, copyright TEXT, license TEXT, uri TEXT, descriptive_ts TEXT, descriptive_language_full_text TEXT, creation_date DATE DEFAULT '01/01/4713BC' NOT NULL, creation_date_mask BIGINT DEFAULT 0 NOT NULL, publication_date_from DATE DEFAULT '01/01/4713BC' NOT NULL, publication_date_from_mask BIGINT DEFAULT 0 NOT NULL, publication_date_to DATE DEFAULT '01/01/4713BC' NOT NULL, publication_date_to_mask BIGINT DEFAULT 0 NOT NULL, parent_ref BIGINT, path TEXT DEFAULT '/' NOT NULL, mime_type TEXT, PRIMARY KEY(id));
CREATE TABLE specimen_parts_insurances (id BIGSERIAL, specimen_part_ref BIGINT NOT NULL, insurance_year BIGINT, insurance_value BIGINT NOT NULL, insurer_ref BIGINT, PRIMARY KEY(id));
CREATE TABLE codes (id BIGINT, table_name TEXT NOT NULL, record_id BIGINT NOT NULL, code_category TEXT DEFAULT 'main' NOT NULL, code_prefix TEXT, code BIGINT, code_suffix TEXT, full_code_indexed TEXT, code_date TIMESTAMP without time zone, PRIMARY KEY(id));
CREATE TABLE catalogue_levels (id BIGINT, level_type TEXT NOT NULL, level_name TEXT NOT NULL, level_sys_name TEXT NOT NULL, optional_level BOOLEAN DEFAULT 'false' NOT NULL, PRIMARY KEY(id));
CREATE TABLE catalogue_properties (id BIGINT, table_name TEXT NOT NULL, record_id BIGINT NOT NULL, property_type TEXT NOT NULL, property_sub_type TEXT, property_sub_type_indexed TEXT, property_qualifier TEXT, property_qualifier_indexed TEXT, date_from_mask BIGINT DEFAULT 0 NOT NULL, date_from timestamp TIMESTAMP without time zone DEFAULT '01/01/4713BC' NOT NULL, date_to_mask BIGINT DEFAULT 0 NOT NULL, date_to timestamp TIMESTAMP without time zone DEFAULT '01/01/4713BC' NOT NULL, property_unit TEXT NOT NULL, property_accuracy_unit TEXT, property_method TEXT, property_method_indexed TEXT, property_tool TEXT NOT NULL, property_tool_indexed TEXT, PRIMARY KEY(id));
CREATE TABLE users_comm (id BIGINT, person_user_ref BIGINT NOT NULL, comm_type TEXT DEFAULT 'phone/fax' NOT NULL, tag TEXT NOT NULL, organization_unit TEXT, person_user_role TEXT, activity_period TEXT, PRIMARY KEY(id));
CREATE TABLE expeditions (id BIGINT, name TEXT NOT NULL, name_ts TEXT, name_indexed TEXT, name_language_full_text TEXT, expedition_from_date_mask BIGINT DEFAULT 0 NOT NULL, expedition_from_date DATE DEFAULT '01/01/4713BC', expedition_to_date_mask BIGINT DEFAULT 0 NOT NULL, expedition_to_date DATE DEFAULT '01/01/4713BC', PRIMARY KEY(id));
CREATE TABLE users_multimedia (id BIGSERIAL, person_user_ref BIGINT NOT NULL, object_ref BIGINT NOT NULL, category TEXT DEFAULT 'avatar' NOT NULL, PRIMARY KEY(id));
CREATE TABLE gtu_tags (id BIGSERIAL, tag_group_ref BIGINT NOT NULL, gtu_ref BIGINT NOT NULL, PRIMARY KEY(id));
CREATE TABLE specimen_individuals (id BIGINT, specimen_ref BIGINT NOT NULL, type TEXT DEFAULT 'specimen' NOT NULL, type_group TEXT, type_search TEXT, sex TEXT DEFAULT 'undefined' NOT NULL, stage TEXT DEFAULT 'undefined' NOT NULL, stat TEXT DEFAULT 'not applicable' NOT NULL, social_status TEXT DEFAULT 'not applicable' NOT NULL, rock_form TEXT DEFAULT 'not applicable' NOT NULL, specimen_individuals_count_min BIGINT DEFAULT 1 NOT NULL, specimen_individuals_count_max BIGINT DEFAULT 1 NOT NULL, PRIMARY KEY(id));
CREATE TABLE collection_maintenance (id BIGINT, table_name TEXT NOT NULL, user_ref BIGINT NOT NULL, category TEXT DEFAULT 'action' NOT NULL, action_observation TEXT NOT NULL, description TEXT, description_ts TEXT, language_full_text TEXT, modification_date_time TIMESTAMP without time zone NOT NULL, PRIMARY KEY(id));
CREATE TABLE record_visibilities (id BIGINT, table_name TEXT NOT NULL, record_id BIGINT NOT NULL, db_user_type BIGINT DEFAULT 0 NOT NULL, user_ref BIGINT DEFAULT 0 NOT NULL, visible BOOLEAN DEFAULT 'true' NOT NULL, PRIMARY KEY(id));
CREATE TABLE specimens (id BIGINT, collection_ref BIGINT NOT NULL, expedition_ref BIGINT, gtu_ref BIGINT DEFAULT 0 NOT NULL, taxon_ref BIGINT DEFAULT 0 NOT NULL, litho_ref BIGINT DEFAULT 0 NOT NULL, chrono_ref BIGINT DEFAULT 0 NOT NULL, lithology_ref BIGINT DEFAULT 0 NOT NULL, mineral_ref BIGINT DEFAULT 0 NOT NULL, identification_qual TEXT, sp TEXT, identification_taxon_ref BIGINT DEFAULT 0 NOT NULL, host_taxon_ref BIGINT DEFAULT 0 NOT NULL, host_specimen_ref BIGINT, host_relationship TEXT, acquisition_category TEXT DEFAULT 'expedition' NOT NULL, acquisition_date_mask BIGINT DEFAULT 0 NOT NULL, acquisition_date DATE DEFAULT '01/01/4713BC' NOT NULL, collecting_method TEXT, collecting_tool TEXT, specimen_count_min BIGINT DEFAULT 1 NOT NULL, specimen_count_max BIGINT DEFAULT 1 NOT NULL, station_visible BOOLEAN DEFAULT 'true' NOT NULL, multimedia_visible BOOLEAN DEFAULT 'true' NOT NULL, category TEXT DEFAULT 'physical' NOT NULL, PRIMARY KEY(id));
CREATE TABLE users_coll_rights_asked (id BIGSERIAL, collection_ref BIGINT DEFAULT 0 NOT NULL, user_ref BIGINT DEFAULT 0 NOT NULL, field_group_name TEXT NOT NULL, db_user_type BIGINT NOT NULL, searchable BOOLEAN DEFAULT 'true' NOT NULL, visible BOOLEAN DEFAULT 'true' NOT NULL, motivation TEXT NOT NULL, asking_date_time TIMESTAMP without time zone NOT NULL, with_sub_collections BOOLEAN DEFAULT 'true' NOT NULL, PRIMARY KEY(id));
CREATE TABLE people (id BIGINT, is_physical BOOLEAN NOT NULL, sub_type TEXT, public_class VARCHAR(255), formated_name TEXT, formated_name_indexed TEXT, formated_name_ts TEXT, title TEXT NOT NULL, family_name TEXT NOT NULL, given_name TEXT, additional_names TEXT, birth_date_mask BIGINT DEFAULT 0 NOT NULL, birth_date DATE DEFAULT '01/01/4713BC' NOT NULL, gender VARCHAR(255), db_people_type BIGINT NOT NULL, end_date_mask BIGINT DEFAULT 0 NOT NULL, end_date DATE DEFAULT '01/01/4713BC' NOT NULL, PRIMARY KEY(id));
CREATE TABLE people_multimedia (id BIGSERIAL, person_user_ref BIGINT NOT NULL, object_ref BIGINT NOT NULL, category TEXT DEFAULT 'avatar' NOT NULL, PRIMARY KEY(id));
CREATE TABLE mineralogy (id BIGINT, name TEXT NOT NULL, name_indexed TEXT, description_year BIGINT, description_year_compl VARCHAR(2), level_ref BIGINT, status TEXT DEFAULT 'valid' NOT NULL, path TEXT DEFAULT '/' NOT NULL, parent_ref BIGINT DEFAULT 0 NOT NULL, code TEXT NOT NULL, classification TEXT DEFAULT 'strunz' NOT NULL, formule TEXT, formule_indexed TEXT, cristal_system TEXT, unit_class_ref BIGINT DEFAULT 0 NOT NULL, unit_class_indexed TEXT DEFAULT '' NOT NULL, unit_division_ref BIGINT DEFAULT 0 NOT NULL, unit_division_indexed TEXT DEFAULT '' NOT NULL, unit_family_ref BIGINT DEFAULT 0 NOT NULL, unit_family_indexed TEXT DEFAULT '' NOT NULL, unit_group_ref BIGINT DEFAULT 0 NOT NULL, unit_group_indexed TEXT DEFAULT '' NOT NULL, unit_variety_ref BIGINT DEFAULT 0 NOT NULL, unit_variety_indexed TEXT DEFAULT '' NOT NULL, PRIMARY KEY(id));
CREATE TABLE my_saved_specimens (id BIGSERIAL, user_ref BIGINT NOT NULL, name TEXT NOT NULL, specimen_ids TEXT NOT NULL, favorite BOOLEAN DEFAULT 'false' NOT NULL, modification_date_time TIMESTAMP without time zone NOT NULL, PRIMARY KEY(id));
CREATE TABLE comments (id BIGINT, table_name TEXT NOT NULL, record_id BIGINT NOT NULL, notion_concerned TEXT NOT NULL, comment TEXT NOT NULL, comment_ts TEXT, comment_language_full_text TEXT, PRIMARY KEY(id));
CREATE TABLE catalogue_people (id BIGINT, table_name TEXT NOT NULL, record_id BIGINT NOT NULL, people_type TEXT DEFAULT 'authors' NOT NULL, people_sub_type TEXT NOT NULL, order_by BIGINT DEFAULT 1 NOT NULL, people_ref BIGINT NOT NULL, PRIMARY KEY(id));
CREATE TABLE gtu (id BIGINT, code TEXT NOT NULL, parent_ref BIGINT NOT NULL, gtu_from_date_mask BIGINT DEFAULT 0 NOT NULL, gtu_from_date TIMESTAMP without time zone DEFAULT '01/01/4713BC' NOT NULL, gtu_to_date_mask BIGINT DEFAULT 0 NOT NULL, gtu_to_date TIMESTAMP without time zone DEFAULT '01/01/4713BC' NOT NULL, PRIMARY KEY(id));
CREATE TABLE tags (id BIGINT, label TEXT NOT NULL, label_indexed TEXT NOT NULL, PRIMARY KEY(id));
CREATE TABLE collections_rights (id BIGSERIAL, collection_ref BIGINT DEFAULT 0 NOT NULL, user_ref BIGINT DEFAULT 0 NOT NULL, rights BIGINT DEFAULT 1 NOT NULL, PRIMARY KEY(id));
CREATE TABLE properties_values (id BIGINT, property_ref BIGINT, property_min TEXT NOT NULL, property_min_unified TEXT, property_max TEXT, property_max_unified TEXT, property_accuracy FLOAT, property_accuracy_unified FLOAT, PRIMARY KEY(id));
CREATE TABLE collections (id BIGINT, collection_type TEXT DEFAULT 'mix' NOT NULL, code TEXT NOT NULL, name TEXT NOT NULL, institution_ref BIGINT NOT NULL, main_manager_ref BIGINT NOT NULL, parent_ref BIGINT, path TEXT DEFAULT '/' NOT NULL, code_auto_increment BOOLEAN DEFAULT 'false' NOT NULL, code_part_code_auto_copy BOOLEAN DEFAULT 'false' NOT NULL, PRIMARY KEY(id));
CREATE TABLE identifications (id BIGINT, table_name TEXT NOT NULL, record_id BIGINT NOT NULL, notion_concerned TEXT NOT NULL, notion_date TIMESTAMP without time zone, value_defined TEXT, value_defined_indexed TEXT, value_defined_ts TEXT, determination_status TEXT, order_by BIGINT DEFAULT 1 NOT NULL, PRIMARY KEY(id));
CREATE TABLE my_saved_searches (id BIGSERIAL, user_ref BIGINT NOT NULL, name TEXT DEFAULT 'default' NOT NULL, search_criterias TEXT NOT NULL, favorite BOOLEAN DEFAULT 'false' NOT NULL, modification_date_time TIMESTAMP without time zone NOT NULL, visible_fields_in_result TEXT NOT NULL, PRIMARY KEY(id));
CREATE TABLE soortenregister (id BIGSERIAL, taxa_ref BIGINT DEFAULT 0 NOT NULL, gtu_ref BIGINT DEFAULT 0 NOT NULL, habitat_ref BIGINT DEFAULT 0 NOT NULL, date_from DATE, date_to DATE, PRIMARY KEY(id));
CREATE TABLE people_comm (id BIGINT, person_user_ref BIGINT NOT NULL, comm_type TEXT DEFAULT 'phone/fax' NOT NULL, tag TEXT NOT NULL, organization_unit TEXT, person_user_role TEXT, activity_period TEXT, PRIMARY KEY(id));
CREATE TABLE multimedia_keywords (id BIGSERIAL, object_ref BIGINT NOT NULL, keyword TEXT NOT NULL, keyword_indexed TEXT, PRIMARY KEY(id));
CREATE TABLE people_aliases (id BIGINT, table_name TEXT NOT NULL, record_id BIGINT NOT NULL, person_ref BIGINT NOT NULL, collection_ref BIGINT DEFAULT 0 NOT NULL, person_name TEXT NOT NULL, PRIMARY KEY(id));
CREATE TABLE collections_admin (id BIGSERIAL, collection_ref BIGINT DEFAULT 0 NOT NULL, user_ref BIGINT DEFAULT 0 NOT NULL, PRIMARY KEY(id));
CREATE TABLE users_login_infos (user_ref BIGINT, login_type TEXT DEFAULT 'local' NOT NULL, user_name TEXT, password TEXT, system_id TEXT, last_seen TIMESTAMP without time zone, PRIMARY KEY(user_ref, system_id));
CREATE TABLE tag_groups (id BIGINT, tag_ref BIGINT NOT NULL, group_name TEXT NOT NULL, group_name_indexed TEXT, sub_group_name TEXT NOT NULL, sub_group_name_indexed TEXT, color TEXT DEFAULT '#FFFFFF', PRIMARY KEY(id));
CREATE TABLE catalogue_relationships (id BIGINT, table_name TEXT NOT NULL, record_id_1 BIGINT NOT NULL, record_id_2 BIGINT NOT NULL, relationship_type BIGINT DEFAULT is synonym of NOT NULL, PRIMARY KEY(id));
CREATE TABLE users_languages (id BIGSERIAL, users_ref BIGINT NOT NULL, language_country TEXT DEFAULT 'en_gb' NOT NULL, mother BOOLEAN DEFAULT 'true' NOT NULL, prefered_language BOOLEAN DEFAULT 'false' NOT NULL, PRIMARY KEY(id));
CREATE TABLE users_workflow (id BIGINT, table_name TEXT NOT NULL, record_id BIGINT NOT NULL, user_ref BIGINT NOT NULL, status TEXT DEFAULT 'to check' NOT NULL, modification_date_time TIMESTAMP without time zone NOT NULL, comment TEXT, PRIMARY KEY(id));
CREATE TABLE users_tracking (id BIGINT, table_name TEXT NOT NULL, record_id BIGINT NOT NULL, user_ref BIGINT NOT NULL, action TEXT DEFAULT 'insert' NOT NULL, modification_date_time TIMESTAMP without time zone NOT NULL, PRIMARY KEY(id));
CREATE TABLE taxonomy (id BIGINT, name TEXT NOT NULL, name_indexed TEXT, description_year BIGINT, description_year_compl VARCHAR(2), level_ref BIGINT, status TEXT DEFAULT 'valid' NOT NULL, path TEXT DEFAULT '/' NOT NULL, parent_ref BIGINT DEFAULT 0 NOT NULL, domain_ref BIGINT DEFAULT 0 NOT NULL, domain_indexed TEXT DEFAULT '' NOT NULL, kingdom_ref BIGINT DEFAULT 0 NOT NULL, kingdom_indexed TEXT DEFAULT '' NOT NULL, super_phylum_ref BIGINT DEFAULT 0 NOT NULL, super_phylum_indexed TEXT DEFAULT '' NOT NULL, phylum_ref BIGINT DEFAULT 0 NOT NULL, phylum_indexed TEXT DEFAULT '' NOT NULL, sub_phylum_ref BIGINT DEFAULT 0 NOT NULL, sub_phylum_indexed TEXT DEFAULT '' NOT NULL, infra_phylum_ref BIGINT DEFAULT 0 NOT NULL, infra_phylum_indexed TEXT DEFAULT '' NOT NULL, super_cohort_botany_ref BIGINT DEFAULT 0 NOT NULL, super_cohort_botany_indexed TEXT DEFAULT '' NOT NULL, cohort_botany_ref BIGINT DEFAULT 0 NOT NULL, cohort_botany_indexed TEXT DEFAULT '' NOT NULL, sub_cohort_botany_ref BIGINT DEFAULT 0 NOT NULL, sub_cohort_botany_indexed TEXT DEFAULT '' NOT NULL, infra_cohort_botany_ref BIGINT DEFAULT 0 NOT NULL, infra_cohort_botany_indexed TEXT DEFAULT '' NOT NULL, super_class_ref BIGINT DEFAULT 0 NOT NULL, super_class_indexed TEXT DEFAULT '' NOT NULL, class_ref BIGINT DEFAULT 0 NOT NULL, class_indexed TEXT DEFAULT '' NOT NULL, sub_class_ref BIGINT DEFAULT 0 NOT NULL, sub_class_indexed TEXT DEFAULT '' NOT NULL, infra_class_ref BIGINT DEFAULT 0 NOT NULL, infra_class_indexed TEXT DEFAULT '' NOT NULL, super_division_ref BIGINT DEFAULT 0 NOT NULL, super_division_indexed TEXT DEFAULT '' NOT NULL, division_ref BIGINT DEFAULT 0 NOT NULL, division_indexed TEXT DEFAULT '' NOT NULL, sub_division_ref BIGINT DEFAULT 0 NOT NULL, sub_division_indexed TEXT DEFAULT '' NOT NULL, infra_division_ref BIGINT DEFAULT 0 NOT NULL, infra_division_indexed TEXT DEFAULT '' NOT NULL, super_legion_ref BIGINT DEFAULT 0 NOT NULL, super_legion_indexed TEXT DEFAULT '' NOT NULL, legion_ref BIGINT DEFAULT 0 NOT NULL, legion_indexed TEXT DEFAULT '' NOT NULL, sub_legion_ref BIGINT DEFAULT 0 NOT NULL, sub_legion_indexed TEXT DEFAULT '' NOT NULL, infra_legion_ref BIGINT DEFAULT 0 NOT NULL, infra_legion_indexed TEXT DEFAULT '' NOT NULL, super_cohort_zoology_ref BIGINT DEFAULT 0 NOT NULL, super_cohort_zoology_indexed TEXT DEFAULT '' NOT NULL, cohort_zoology_ref BIGINT DEFAULT 0 NOT NULL, cohort_zoology_indexed TEXT DEFAULT '' NOT NULL, sub_cohort_zoology_ref BIGINT DEFAULT 0 NOT NULL, sub_cohort_zoology_indexed TEXT DEFAULT '' NOT NULL, infra_cohort_zoology_ref BIGINT DEFAULT 0 NOT NULL, infra_cohort_zoology_indexed TEXT DEFAULT '' NOT NULL, super_order_ref BIGINT DEFAULT 0 NOT NULL, super_order_indexed TEXT DEFAULT '' NOT NULL, order_ref BIGINT DEFAULT 0 NOT NULL, order_indexed TEXT DEFAULT '' NOT NULL, sub_order_ref BIGINT DEFAULT 0 NOT NULL, sub_order_indexed TEXT DEFAULT '' NOT NULL, infra_order_ref BIGINT DEFAULT 0 NOT NULL, infra_order_indexed TEXT DEFAULT '' NOT NULL, section_zoology_ref BIGINT DEFAULT 0 NOT NULL, section_zoology_indexed TEXT DEFAULT '' NOT NULL, sub_section_zoology_ref BIGINT DEFAULT 0 NOT NULL, sub_section_zoology_indexed TEXT DEFAULT '' NOT NULL, super_family_ref BIGINT DEFAULT 0 NOT NULL, super_family_indexed TEXT DEFAULT '' NOT NULL, family_ref BIGINT DEFAULT 0 NOT NULL, family_indexed TEXT DEFAULT '' NOT NULL, sub_family_ref BIGINT DEFAULT 0 NOT NULL, sub_family_indexed TEXT DEFAULT '' NOT NULL, infra_family_ref BIGINT DEFAULT 0 NOT NULL, infra_family_indexed TEXT DEFAULT '' NOT NULL, super_tribe_ref BIGINT DEFAULT 0 NOT NULL, super_tribe_indexed TEXT DEFAULT '' NOT NULL, tribe_ref BIGINT DEFAULT 0 NOT NULL, tribe_indexed TEXT DEFAULT '' NOT NULL, sub_tribe_ref BIGINT DEFAULT 0 NOT NULL, sub_tribe_indexed TEXT DEFAULT '' NOT NULL, infra_tribe_ref BIGINT DEFAULT 0 NOT NULL, infra_tribe_indexed TEXT DEFAULT '' NOT NULL, genus_ref BIGINT DEFAULT 0 NOT NULL, genus_indexed TEXT DEFAULT '' NOT NULL, sub_genus_ref BIGINT DEFAULT 0 NOT NULL, sub_genus_indexed TEXT DEFAULT '' NOT NULL, section_botany_ref BIGINT DEFAULT 0 NOT NULL, section_botany_indexed TEXT DEFAULT '' NOT NULL, sub_section_botany_ref BIGINT DEFAULT 0 NOT NULL, sub_section_botany_indexed TEXT DEFAULT '' NOT NULL, serie_ref BIGINT DEFAULT 0 NOT NULL, serie_indexed TEXT DEFAULT '' NOT NULL, sub_serie_ref BIGINT DEFAULT 0 NOT NULL, sub_serie_indexed TEXT DEFAULT '' NOT NULL, super_species_ref BIGINT DEFAULT 0 NOT NULL, super_species_indexed TEXT DEFAULT '' NOT NULL, species_ref BIGINT DEFAULT 0 NOT NULL, species_indexed TEXT DEFAULT '' NOT NULL, sub_species_ref BIGINT DEFAULT 0 NOT NULL, sub_species_indexed TEXT DEFAULT '' NOT NULL, variety_ref BIGINT DEFAULT 0 NOT NULL, variety_indexed TEXT DEFAULT '' NOT NULL, sub_variety_ref BIGINT DEFAULT 0 NOT NULL, sub_variety_indexed TEXT DEFAULT '' NOT NULL, form_ref BIGINT DEFAULT 0 NOT NULL, form_indexed TEXT DEFAULT '' NOT NULL, sub_form_ref BIGINT DEFAULT 0 NOT NULL, sub_form_indexed TEXT DEFAULT '' NOT NULL, abberans_ref BIGINT DEFAULT 0 NOT NULL, abberans_indexed TEXT DEFAULT '' NOT NULL, chimera_hybrid_pos TEXT DEFAULT 'none' NOT NULL, extinct BOOLEAN DEFAULT 'false' NOT NULL, PRIMARY KEY(id));
ALTER TABLE people_relationships ADD FOREIGN KEY (person_2_ref) REFERENCES people(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE people_relationships ADD FOREIGN KEY (person_1_ref) REFERENCES people(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE people_addresses ADD FOREIGN KEY (person_user_ref) REFERENCES people(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE users_tables_fields_tracked ADD FOREIGN KEY (user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE chronostratigraphy ADD FOREIGN KEY (parent_ref) REFERENCES chronostratigraphy(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE collections_fields_visibilities ADD FOREIGN KEY (user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE collections_fields_visibilities ADD FOREIGN KEY (collection_ref) REFERENCES collections(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE specimens_accompanying ADD FOREIGN KEY (taxon_ref) REFERENCES taxonomy(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE specimens_accompanying ADD FOREIGN KEY (specimen_ref) REFERENCES specimens(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE specimens_accompanying ADD FOREIGN KEY (mineral_ref) REFERENCES mineralogy(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE associated_multimedia ADD FOREIGN KEY (multimedia_ref) REFERENCES multimedia(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE lithology ADD FOREIGN KEY (parent_ref) REFERENCES lithology(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE possible_upper_levels ADD FOREIGN KEY (level_upper_ref) REFERENCES catalogue_levels(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE possible_upper_levels ADD FOREIGN KEY (level_ref) REFERENCES catalogue_levels(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE lithostratigraphy ADD FOREIGN KEY (parent_ref) REFERENCES lithostratigraphy(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE people_languages ADD FOREIGN KEY (people_ref) REFERENCES people(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE users_addresses ADD FOREIGN KEY (person_user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE my_preferences ADD FOREIGN KEY (user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE my_preferences ADD FOREIGN KEY (icon_ref) REFERENCES multimedia(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE multimedia ADD FOREIGN KEY (parent_ref) REFERENCES multimedia(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE specimen_parts_insurances ADD FOREIGN KEY (specimen_part_ref) REFERENCES specimen_parts(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE users_comm ADD FOREIGN KEY (person_user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE users_multimedia ADD FOREIGN KEY (person_user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE users_multimedia ADD FOREIGN KEY (object_ref) REFERENCES multimedia(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE gtu_tags ADD FOREIGN KEY (tag_group_ref) REFERENCES tag_groups(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE gtu_tags ADD FOREIGN KEY (gtu_ref) REFERENCES gtu(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE specimen_individuals ADD FOREIGN KEY (specimen_ref) REFERENCES specimens(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE collection_maintenance ADD FOREIGN KEY (user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE record_visibilities ADD FOREIGN KEY (user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE specimens ADD FOREIGN KEY (taxon_ref) REFERENCES taxonomy(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE specimens ADD FOREIGN KEY (mineral_ref) REFERENCES mineralogy(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE specimens ADD FOREIGN KEY (lithology_ref) REFERENCES lithology(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE specimens ADD FOREIGN KEY (litho_ref) REFERENCES lithostratigraphy(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE specimens ADD FOREIGN KEY (identification_taxon_ref) REFERENCES taxonomy(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE specimens ADD FOREIGN KEY (host_taxon_ref) REFERENCES taxonomy(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE specimens ADD FOREIGN KEY (host_specimen_ref) REFERENCES specimens(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE specimens ADD FOREIGN KEY (expedition_ref) REFERENCES expeditions(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE specimens ADD FOREIGN KEY (collection_ref) REFERENCES collections(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE specimens ADD FOREIGN KEY (chrono_ref) REFERENCES chronostratigraphy(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE users_coll_rights_asked ADD FOREIGN KEY (user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE users_coll_rights_asked ADD FOREIGN KEY (collection_ref) REFERENCES collections(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE people_multimedia ADD FOREIGN KEY (person_user_ref) REFERENCES people(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE people_multimedia ADD FOREIGN KEY (object_ref) REFERENCES multimedia(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE mineralogy ADD FOREIGN KEY (parent_ref) REFERENCES mineralogy(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE my_saved_specimens ADD FOREIGN KEY (user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE catalogue_people ADD FOREIGN KEY (people_ref) REFERENCES people(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE gtu ADD FOREIGN KEY (parent_ref) REFERENCES gtu(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE collections_rights ADD FOREIGN KEY (user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE collections_rights ADD FOREIGN KEY (collection_ref) REFERENCES collections(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE properties_values ADD FOREIGN KEY (property_ref) REFERENCES catalogue_properties(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE collections ADD FOREIGN KEY (parent_ref) REFERENCES collections(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE collections ADD FOREIGN KEY (main_manager_ref) REFERENCES people(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE collections ADD FOREIGN KEY (institution_ref) REFERENCES people(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE my_saved_searches ADD FOREIGN KEY (user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE soortenregister ADD FOREIGN KEY (taxa_ref) REFERENCES taxonomy(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE soortenregister ADD FOREIGN KEY (habitat_ref) REFERENCES habitats(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE soortenregister ADD FOREIGN KEY (gtu_ref) REFERENCES gtu(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE people_comm ADD FOREIGN KEY (person_user_ref) REFERENCES people(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE multimedia_keywords ADD FOREIGN KEY (object_ref) REFERENCES multimedia(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE people_aliases ADD FOREIGN KEY (person_ref) REFERENCES people(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE people_aliases ADD FOREIGN KEY (collection_ref) REFERENCES collections(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE collections_admin ADD FOREIGN KEY (user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE collections_admin ADD FOREIGN KEY (collection_ref) REFERENCES collections(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE users_login_infos ADD FOREIGN KEY (user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE tag_groups ADD FOREIGN KEY (tag_ref) REFERENCES tags(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE users_languages ADD FOREIGN KEY (users_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE users_workflow ADD FOREIGN KEY (user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE users_tracking ADD FOREIGN KEY (user_ref) REFERENCES users(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
ALTER TABLE taxonomy ADD FOREIGN KEY (parent_ref) REFERENCES taxonomy(id) NOT DEFERRABLE INITIALLY IMMEDIATE;
