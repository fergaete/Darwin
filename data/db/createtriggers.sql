CREATE TRIGGER trg_cpy_specimensMainCode_specimenPartCode AFTER INSERT
	ON specimen_parts FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_specimensMainCode();

CREATE TRIGGER trg_cpy_idToCode_gtu BEFORE INSERT OR UPDATE
	ON gtu FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_idToCode();

-- BEGIN HIERARCHICAL UNITS CATALOGUE COPY FROM PARENT

CREATE TRIGGER trg_cpy_hierarchy_from_parents_chronostratigraphy BEFORE INSERT
	ON chronostratigraphy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_hierarchy_from_parents();

CREATE TRIGGER trg_cpy_hierarchy_from_parents_lithostratigraphy BEFORE INSERT
	ON lithostratigraphy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_hierarchy_from_parents();

CREATE TRIGGER trg_cpy_hierarchy_from_parents_mineralogy BEFORE INSERT
	ON mineralogy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_hierarchy_from_parents();

CREATE TRIGGER trg_cpy_hierarchy_from_parents_taxa BEFORE INSERT
	ON taxonomy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_hierarchy_from_parents();

CREATE TRIGGER trg_cpy_hierarchy_from_parents_lithology BEFORE INSERT
	ON lithology FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_hierarchy_from_parents();

-- END HIERARCHICAL UNITS CATALOGUE COPY FROM PARENT

-- BEGIN HIERARCHICAL UNITS CATALOGUE IMPACT CHILDREN

CREATE TRIGGER trg_cpy_name_updt_impact_children_chronostratigraphy BEFORE UPDATE
	ON chronostratigraphy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_name_updt_impact_children();

CREATE TRIGGER trg_cpy_name_updt_impact_children_lithostratigraphy BEFORE UPDATE
	ON lithostratigraphy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_name_updt_impact_children();

CREATE TRIGGER trg_cpy_name_updt_impact_children_mineralogy BEFORE UPDATE
	ON mineralogy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_name_updt_impact_children();

CREATE TRIGGER trg_cpy_name_updt_impact_children_taxa BEFORE UPDATE
	ON taxonomy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_name_updt_impact_children();

CREATE TRIGGER trg_cpy_name_updt_impact_children_lithology BEFORE UPDATE
	ON lithology FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_name_updt_impact_children();

-- END HIERARCHICAL UNITS CATALOGUE IMPACT CHILDREN

--- BEGIN HIERARCHICAL UNITS UPDATE WHEN LEVEL OR PARENT UPDATED

CREATE TRIGGER trg_cpy_update_levels_or_parent_cascade_chronostratigraphy BEFORE UPDATE
	ON chronostratigraphy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_update_levels_or_parent_cascade();

CREATE TRIGGER trg_cpy_update_levels_or_parent_cascade_lithostratigraphy BEFORE UPDATE
	ON lithostratigraphy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_update_levels_or_parent_cascade();

CREATE TRIGGER trg_cpy_update_levels_or_parent_cascade_mineralogy BEFORE UPDATE
	ON mineralogy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_update_levels_or_parent_cascade();

CREATE TRIGGER trg_cpy_update_levels_or_parent_cascade_taxa BEFORE UPDATE
	ON taxonomy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_update_levels_or_parent_cascade();

CREATE TRIGGER trg_cpy_update_levels_or_parent_cascade_lithology BEFORE UPDATE
	ON lithology FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_update_levels_or_parent_cascade();

--- END HIERARCHICAL UNITS UPDATE WHEN LEVEL OR PARENT UPDATED

--- BEGIN CONSTRUCTION OF HIERARCHY PATH

CREATE TRIGGER trg_cpy_update_path_chronostratigraphy BEFORE INSERT OR UPDATE
	ON chronostratigraphy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_update_path();

CREATE TRIGGER trg_cpy_update_path_lithostratigraphy BEFORE INSERT OR UPDATE
	ON lithostratigraphy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_update_path();

CREATE TRIGGER trg_cpy_update_path_mineralogy BEFORE INSERT OR UPDATE
	ON mineralogy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_update_path();

CREATE TRIGGER trg_cpy_update_path_taxonomy BEFORE INSERT OR UPDATE
	ON taxonomy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_update_path();

CREATE TRIGGER trg_cpy_update_path_lithology BEFORE INSERT OR UPDATE
	ON lithology FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_update_path();

--- END CONSTRUCTION OF HIERARCHY PATH

-- BEGIN FULLTOINDEX
CREATE TRIGGER trg_cpy_fullToIndex_catalogueproperties BEFORE INSERT OR UPDATE
	ON catalogue_properties FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_chronostratigraphy BEFORE INSERT OR UPDATE
	ON chronostratigraphy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_expeditions BEFORE INSERT OR UPDATE
	ON expeditions FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_expeditions BEFORE INSERT OR UPDATE
	ON habitats FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_identifications BEFORE INSERT OR UPDATE
	ON identifications FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_lithology BEFORE INSERT OR UPDATE
	ON lithology FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_lithostratigraphy BEFORE INSERT OR UPDATE
	ON lithostratigraphy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_mineralogy BEFORE INSERT OR UPDATE
	ON mineralogy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_multimedia BEFORE INSERT OR UPDATE
	ON multimedia FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_codes BEFORE INSERT OR UPDATE
	ON codes FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_multimediakeywords BEFORE INSERT OR UPDATE
	ON multimedia_keywords FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_taggroups BEFORE INSERT OR UPDATE
	ON tag_groups FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_taxa BEFORE INSERT OR UPDATE
	ON taxonomy FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_classification_keywords BEFORE INSERT OR UPDATE
        ON classification_keywords FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_classvernacularnames BEFORE INSERT OR UPDATE
	ON class_vernacular_names FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_vernacularnames BEFORE INSERT OR UPDATE
	ON vernacular_names FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_igs BEFORE INSERT OR UPDATE
	ON igs FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_collecting_methods BEFORE INSERT OR UPDATE
  ON collecting_methods FOR EACH ROW
  EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_cpy_fullToIndex_collecting_tools BEFORE INSERT OR UPDATE
  ON collecting_tools FOR EACH ROW
  EXECUTE PROCEDURE fct_cpy_fullToIndex();

CREATE TRIGGER trg_clr_specialstatus_specimenindividuals BEFORE INSERT OR UPDATE
	ON specimen_individuals FOR EACH ROW
	EXECUTE PROCEDURE fct_clr_specialstatus();

CREATE TRIGGER trg_cpy_gtuTags_TagGroups AFTER INSERT OR UPDATE OR DELETE
	ON tag_groups FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_gtuTags();

/******* BEGIN TRIGGER REFS *************
**
**
*****************************************/

CREATE TRIGGER trg_clr_referenceRecord_cataloguerelationships AFTER DELETE
	ON catalogue_relationships FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_cataloguepeople AFTER DELETE
	ON catalogue_people FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_gtu AFTER DELETE
	ON gtu FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_catalogueproperties AFTER DELETE
	ON catalogue_properties FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_identifications AFTER DELETE
	ON identifications FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_insurances AFTER DELETE
 	ON insurances FOR EACH ROW
 	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_vernacularnames AFTER DELETE
	ON vernacular_names FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_expeditions AFTER DELETE
	ON expeditions FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_people AFTER DELETE
	ON people FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_users AFTER DELETE
	ON users FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_multimedia AFTER DELETE
	ON multimedia FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();


CREATE TRIGGER trg_clr_referenceRecord_collections AFTER DELETE
	ON collections FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

/*CREATE TRIGGER trg_clr_referenceRecord_userscollrightsasked AFTER DELETE
	ON users_coll_rights_asked FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();
*/
CREATE TRIGGER trg_clr_referenceRecord_mysavedsearches AFTER DELETE
	ON collection_maintenance FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_taxa AFTER DELETE
	ON taxonomy FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_chronostratigraphy AFTER DELETE
	ON chronostratigraphy FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_lithostratigraphy AFTER DELETE
	ON lithostratigraphy FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_mineralogy AFTER DELETE
	ON mineralogy FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_lithology AFTER DELETE
	ON lithology FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_habitats AFTER DELETE
	ON habitats FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_soortenregister AFTER DELETE
	ON soortenregister FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_specimens AFTER DELETE
	ON specimens FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_specimenindividuals AFTER DELETE
	ON specimen_individuals FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_specimenparts AFTER DELETE
	ON specimen_parts FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

CREATE TRIGGER trg_clr_referenceRecord_specimensaccompanying AFTER DELETE
	ON specimens_accompanying FOR EACH ROW
	EXECUTE PROCEDURE fct_clear_referencedRecord();

/**** BEGIN _TS *****/
CREATE TRIGGER trg_cpy_toFullText_comments BEFORE INSERT OR UPDATE
	ON comments FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_toFullText();

CREATE TRIGGER trg_cpy_toFullText_ext_links BEFORE INSERT OR UPDATE
	ON ext_links FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_toFullText();

CREATE TRIGGER trg_cpy_toFullText_identifications BEFORE INSERT OR UPDATE
	ON identifications FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_toFullText();

CREATE TRIGGER trg_cpy_toFullText_peopleaddresses BEFORE INSERT OR UPDATE
	ON people_addresses FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_toFullText();

CREATE TRIGGER trg_cpy_toFullText_usersaddresses BEFORE INSERT OR UPDATE
	ON users_addresses FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_toFullText();

CREATE TRIGGER trg_cpy_toFullText_multimedia BEFORE INSERT OR UPDATE
	ON multimedia FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_toFullText();

CREATE TRIGGER trg_cpy_toFullText_collectionmaintenance BEFORE INSERT OR UPDATE
	ON collection_maintenance FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_toFullText();

CREATE TRIGGER trg_cpy_updateCollectionRights AFTER INSERT OR UPDATE
	ON collections FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_updateCollectionRights();

CREATE TRIGGER trg_chk_canUpdateCollectionsRights BEFORE UPDATE
  ON collections_rights FOR EACH ROW
  EXECUTE PROCEDURE fct_chk_canUpdateCollectionsRights();

CREATE TRIGGER trg_cpy_updateUserRights AFTER INSERT OR UPDATE OR DELETE
  ON collections_rights FOR EACH ROW
  EXECUTE PROCEDURE fct_cpy_updateUserRights();

CREATE TRIGGER trg_cpy_updateUserRightsCollections AFTER INSERT OR UPDATE
  ON collections FOR EACH ROW
  EXECUTE PROCEDURE fct_cpy_updateUserRights();

CREATE TRIGGER trg_cpy_updateMyWidgetsCollRights AFTER UPDATE OR DELETE
  ON collections_rights FOR EACH ROW
  EXECUTE PROCEDURE fct_cpy_updateMyWidgetsColl();

CREATE TRIGGER trg_cpy_toFullText_expeditions BEFORE INSERT OR UPDATE
	ON expeditions FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_toFullText();

CREATE TRIGGER trg_cpy_toFullText_habitats BEFORE INSERT OR UPDATE
	ON habitats FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_toFullText();

CREATE TRIGGER trg_cpy_toFullText_vernacularnames BEFORE INSERT OR UPDATE
	ON vernacular_names FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_toFullText();

CREATE TRIGGER trg_chk_specimenCollectionAllowed BEFORE INSERT OR UPDATE OR DELETE
  ON specimens FOR EACH ROW
  EXECUTE PROCEDURE fct_chk_specimenCollectionAllowed();

CREATE TRIGGER trg_chk_specimenIndCollectionAllowed BEFORE INSERT OR UPDATE OR DELETE
  ON specimen_individuals FOR EACH ROW
  EXECUTE PROCEDURE fct_chk_specimenCollectionAllowed();

CREATE TRIGGER trg_chk_specimenPartCollectionAllowed BEFORE INSERT OR UPDATE OR DELETE
  ON specimen_parts FOR EACH ROW
  EXECUTE PROCEDURE fct_chk_specimenCollectionAllowed();

CREATE TRIGGER trg_chk_parentCollInstitution BEFORE INSERT OR UPDATE
  ON collections FOR EACH ROW
  EXECUTE PROCEDURE fct_chk_parentCollInstitution();

CREATE TRIGGER trg_cpy_updateCollInstitutionCascade AFTER UPDATE
  ON collections FOR EACH ROW
  EXECUTE PROCEDURE fct_cpy_updateCollInstitutionCascade();

/* trigger set BEFORE update, in order to avoid bad db_user_type to be set when this user is a collection manager */

CREATE TRIGGER trg_chk_peopleType AFTER UPDATE
	ON people FOR EACH ROW
	EXECUTE PROCEDURE fct_chk_peopleType();

CREATE TRIGGER trg_chk_AreRole AFTER INSERT OR UPDATE
	ON catalogue_people FOR EACH ROW
	EXECUTE PROCEDURE fct_chk_AreRole();


CREATE TRIGGER trg_cpy_FormattedName BEFORE INSERT OR UPDATE
	ON people FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_FormattedName();

CREATE TRIGGER trg_cpy_FormattedName BEFORE INSERT OR UPDATE
	ON users FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_FormattedName();

CREATE TRIGGER trg_cpy_path_multimedia BEFORE INSERT OR UPDATE
	ON multimedia FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_path();

CREATE TRIGGER trg_cpy_path_collections BEFORE INSERT OR UPDATE
	ON collections FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_path();

CREATE TRIGGER trg_cpy_path_peopleRelationships BEFORE INSERT OR UPDATE
	ON people_relationships FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_path();

CREATE TRIGGER trg_cpy_path_gtu BEFORE INSERT OR UPDATE
	ON gtu FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_path();

CREATE TRIGGER trg_cpy_path_specimen_parts BEFORE INSERT OR UPDATE
        ON specimen_parts FOR EACH ROW
        EXECUTE PROCEDURE fct_cpy_path();

CREATE TRIGGER trg_cpy_path_habitats BEFORE INSERT OR UPDATE
	ON habitats FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_path();


/*** TRACKING ****/

CREATE TRIGGER trg_trk_log_table_taxonomy AFTER INSERT OR UPDATE OR  DELETE
	ON taxonomy FOR EACH ROW
	EXECUTE PROCEDURE fct_trk_log_table();

CREATE TRIGGER trg_trk_log_table_lithology AFTER INSERT OR UPDATE OR  DELETE
	ON lithology FOR EACH ROW
	EXECUTE PROCEDURE fct_trk_log_table();

CREATE TRIGGER trg_trk_log_table_chronostratigraphy AFTER INSERT OR UPDATE OR  DELETE
	ON chronostratigraphy FOR EACH ROW
	EXECUTE PROCEDURE fct_trk_log_table();

CREATE TRIGGER trg_trk_log_table_mineralogy AFTER INSERT OR UPDATE OR  DELETE
	ON mineralogy FOR EACH ROW
	EXECUTE PROCEDURE fct_trk_log_table();

CREATE TRIGGER trg_trk_log_table_people AFTER INSERT OR UPDATE OR  DELETE
	ON people FOR EACH ROW
	EXECUTE PROCEDURE fct_trk_log_table();

CREATE TRIGGER trg_trk_log_table_insurances AFTER INSERT OR UPDATE OR  DELETE
	ON insurances FOR EACH ROW
	EXECUTE PROCEDURE fct_trk_log_table();

CREATE TRIGGER trg_trk_log_table_specimens AFTER INSERT OR UPDATE OR  DELETE
	ON specimens FOR EACH ROW
	EXECUTE PROCEDURE fct_trk_log_table();

CREATE TRIGGER trg_trk_log_table_specimen_individuals AFTER INSERT OR UPDATE OR  DELETE
	ON specimen_individuals FOR EACH ROW
	EXECUTE PROCEDURE fct_trk_log_table();

CREATE TRIGGER trg_trk_log_table_specimen_parts AFTER INSERT OR UPDATE OR  DELETE
	ON specimen_parts FOR EACH ROW
	EXECUTE PROCEDURE fct_trk_log_table();

CREATE TRIGGER trg_trk_log_table_gtu AFTER INSERT OR UPDATE OR  DELETE
	ON gtu FOR EACH ROW
	EXECUTE PROCEDURE fct_trk_log_table();

CREATE TRIGGER trg_trk_log_table_tag_groups AFTER INSERT OR UPDATE OR  DELETE
	ON tag_groups FOR EACH ROW
	EXECUTE PROCEDURE fct_trk_log_table();

CREATE TRIGGER trg_trk_log_table_collections AFTER INSERT OR UPDATE OR  DELETE
	ON collections FOR EACH ROW
	EXECUTE PROCEDURE fct_trk_log_table();

CREATE TRIGGER trg_trk_log_table_comments AFTER INSERT OR UPDATE OR  DELETE
	ON comments FOR EACH ROW
	EXECUTE PROCEDURE fct_trk_log_table();

CREATE TRIGGER trg_trk_log_table_ext_links AFTER INSERT OR UPDATE OR  DELETE
	ON ext_links FOR EACH ROW
	EXECUTE PROCEDURE fct_trk_log_table();

CREATE TRIGGER trg_trk_log_table_expeditions AFTER INSERT OR UPDATE OR  DELETE
	ON expeditions FOR EACH ROW
	EXECUTE PROCEDURE fct_trk_log_table();

/*
** Trigger aimed at calculating unified values
*/

CREATE TRIGGER trg_cpy_unified_values BEFORE INSERT OR UPDATE
	ON properties_values FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_unified_values();

CREATE TRIGGER trg_cpy_unified_values BEFORE INSERT OR UPDATE
	ON catalogue_properties FOR EACH ROW
	EXECUTE PROCEDURE fct_cpy_unified_values();

/** GTU GIS ***/
CREATE TRIGGER trg_cpy_location BEFORE INSERT OR UPDATE
        ON gtu FOR EACH ROW
        EXECUTE PROCEDURE fct_cpy_location() ;

/**** ADDing TS words Trigger ***/

CREATE TRIGGER trg_words_ts_cpy_collection_maintenance BEFORE INSERT OR UPDATE
	ON collection_maintenance FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_words_ts_cpy_comments BEFORE INSERT OR UPDATE
	ON comments FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();
	
CREATE TRIGGER trg_words_ts_cpy_ext_links BEFORE INSERT OR UPDATE
	ON ext_links FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_words_ts_cpy_vernacular_names BEFORE INSERT OR UPDATE
	ON vernacular_names FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_words_ts_cpy_identification BEFORE INSERT OR UPDATE
	ON identifications FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_words_ts_cpy_multimedia BEFORE INSERT OR UPDATE
	ON multimedia FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_words_ts_cpy_people BEFORE INSERT OR UPDATE
	ON people FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_words_ts_cpy_people_addresses BEFORE INSERT OR UPDATE
	ON people_addresses FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_words_ts_cpy_users BEFORE INSERT OR UPDATE
	ON users FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_words_ts_cpy_expeditions BEFORE INSERT OR UPDATE
	ON expeditions FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_words_ts_cpy_habitats BEFORE INSERT OR UPDATE
	ON habitats FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_words_ts_cpy_mineralogy BEFORE INSERT OR UPDATE
	ON mineralogy FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_words_ts_cpy_chronostratigraphy BEFORE INSERT OR UPDATE
	ON chronostratigraphy FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_words_ts_cpy_lithostratigraphy BEFORE INSERT OR UPDATE
	ON lithostratigraphy FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_words_ts_cpy_lithology BEFORE INSERT OR UPDATE
	ON lithology FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_words_ts_cpy_taxonomy BEFORE INSERT OR UPDATE
	ON taxonomy FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_words_ts_cpy_codes BEFORE INSERT OR UPDATE
	ON codes FOR EACH ROW
	EXECUTE PROCEDURE fct_trg_word();

CREATE TRIGGER trg_nbr_in_relation  BEFORE INSERT OR UPDATE
   	ON catalogue_relationships FOR EACH ROW
	EXECUTE PROCEDURE fct_nbr_in_relation();

CREATE TRIGGER trg_nbr_in_synonym  AFTER INSERT OR UPDATE
   	ON classification_synonymies FOR EACH ROW
	EXECUTE PROCEDURE fct_nbr_in_synonym();


/**** Specimen Hosting triggers ****/

CREATE TRIGGER trg_cpy_updateHosts AFTER UPDATE
        ON specimens FOR EACH ROW
        EXECUTE PROCEDURE fct_cpy_updateHosts();

CREATE TRIGGER trg_cpy_updateSpecHostImpact BEFORE UPDATE
        ON specimens FOR EACH ROW
        EXECUTE PROCEDURE fct_cpy_updateSpecHostImpact();

/**** Darwin Flat Synchronisation triggers ****/

CREATE TRIGGER trg_update_expeditions_darwin_flat AFTER UPDATE
        ON expeditions FOR EACH ROW
        EXECUTE PROCEDURE fct_update_darwin_flat();

CREATE TRIGGER trg_update_collections_darwin_flat AFTER UPDATE
        ON collections FOR EACH ROW
        EXECUTE PROCEDURE fct_update_darwin_flat();

CREATE TRIGGER trg_update_gtu_darwin_flat AFTER UPDATE
        ON gtu FOR EACH ROW
        EXECUTE PROCEDURE fct_update_darwin_flat();

CREATE TRIGGER trg_update_tag_groups_darwin_flat AFTER INSERT OR UPDATE OR DELETE
        ON tag_groups FOR EACH ROW
        EXECUTE PROCEDURE fct_update_darwin_flat();

CREATE TRIGGER trg_update_people_darwin_flat AFTER UPDATE
        ON people FOR EACH ROW
        EXECUTE PROCEDURE fct_update_darwin_flat();

CREATE TRIGGER trg_update_users_darwin_flat AFTER UPDATE
        ON users FOR EACH ROW
        EXECUTE PROCEDURE fct_update_darwin_flat();

CREATE TRIGGER trg_update_igs_darwin_flat AFTER UPDATE
        ON igs FOR EACH ROW
        EXECUTE PROCEDURE fct_update_darwin_flat();

CREATE TRIGGER trg_update_taxonomy_darwin_flat AFTER UPDATE
        ON taxonomy FOR EACH ROW
        EXECUTE PROCEDURE fct_update_darwin_flat();

CREATE TRIGGER trg_update_chronostratigraphy_darwin_flat AFTER UPDATE
        ON chronostratigraphy FOR EACH ROW
        EXECUTE PROCEDURE fct_update_darwin_flat();

CREATE TRIGGER trg_update_lithostratigraphy_darwin_flat AFTER UPDATE
        ON lithostratigraphy FOR EACH ROW
        EXECUTE PROCEDURE fct_update_darwin_flat();

CREATE TRIGGER trg_update_lithology_darwin_flat AFTER UPDATE
        ON lithology FOR EACH ROW
        EXECUTE PROCEDURE fct_update_darwin_flat();

CREATE TRIGGER trg_update_mineralogy_darwin_flat AFTER UPDATE
        ON mineralogy FOR EACH ROW
        EXECUTE PROCEDURE fct_update_darwin_flat();

CREATE TRIGGER trg_update_specimens_darwin_flat AFTER INSERT OR UPDATE
        ON specimens FOR EACH ROW
        EXECUTE PROCEDURE fct_update_darwin_flat();

CREATE TRIGGER trg_update_specimen_individuals_darwin_flat AFTER INSERT OR UPDATE
        ON specimen_individuals FOR EACH ROW
        EXECUTE PROCEDURE fct_update_darwin_flat();

CREATE TRIGGER trg_delete_specimen_individuals_darwin_flat AFTER DELETE
        ON specimen_individuals FOR EACH ROW
        EXECUTE PROCEDURE fct_delete_darwin_flat_ind_part();

CREATE TRIGGER trg_update_specimen_parts_darwin_flat AFTER INSERT OR UPDATE
        ON specimen_parts FOR EACH ROW
        EXECUTE PROCEDURE fct_update_darwin_flat();

CREATE TRIGGER trg_delete_specimen_parts_darwin_flat AFTER DELETE
        ON specimen_parts FOR EACH ROW
        EXECUTE PROCEDURE fct_delete_darwin_flat_ind_part();

CREATE TRIGGER trg_unpromotion_remove_cols AFTER UPDATE
        ON users FOR EACH ROW
        EXECUTE PROCEDURE fct_unpromotion_impact_prefs();
