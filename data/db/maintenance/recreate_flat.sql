/***
* Don't forget to drop indexes
*/

TRUNCATE darwin_flat;
INSERT INTO darwin_flat
(
    spec_ref,
    category,
    collection_ref,
    collection_type,
    collection_code,
    collection_name,
    collection_is_public,
    collection_parent_ref,
    collection_path,
    expedition_ref,
    expedition_name,
    expedition_name_ts,
    expedition_name_indexed,
    station_visible,
    gtu_ref,
    gtu_code,
    gtu_parent_ref,
    gtu_path,
    gtu_from_date_mask,
    gtu_from_date,
    gtu_to_date_mask,
    gtu_to_date,
    gtu_tag_values_indexed,
    gtu_country_tag_value,
    gtu_country_tag_indexed,
    gtu_location,
    spec_ident_ids,
    ind_ident_ids,
    spec_coll_ids,
    spec_don_sel_ids,
    taxon_ref,
    taxon_name,
    taxon_name_indexed,
    taxon_name_order_by,
    taxon_level_ref,
    taxon_level_name,
    taxon_status,
    taxon_path,
    taxon_parent_ref,
    taxon_extinct,
    litho_ref,
    litho_name,
    litho_name_indexed,
    litho_name_order_by,
    litho_level_ref,
    litho_level_name,
    litho_status,
    litho_local,
    litho_color,
    litho_path,
    litho_parent_ref,
    chrono_ref,
    chrono_name,
    chrono_name_indexed,
    chrono_name_order_by,
    chrono_level_ref,
    chrono_level_name,
    chrono_status,
    chrono_local,
    chrono_color,
    chrono_path,
    chrono_parent_ref,
    lithology_ref,
    lithology_name,
    lithology_name_indexed,
    lithology_name_order_by,
    lithology_level_ref,
    lithology_level_name,
    lithology_status,
    lithology_local,
    lithology_color,
    lithology_path,
    lithology_parent_ref,
    mineral_ref,
    mineral_name,
    mineral_name_indexed,
    mineral_name_order_by,
    mineral_level_ref,
    mineral_level_name,
    mineral_status,
    mineral_local,
    mineral_color,
    mineral_path,
    mineral_parent_ref,
    host_taxon_ref,
    host_relationship,
    host_taxon_name,
    host_taxon_name_indexed,
    host_taxon_name_order_by,
    host_taxon_level_ref,
    host_taxon_level_name,
    host_taxon_status,
    host_taxon_path,
    host_taxon_parent_ref,
    host_taxon_extinct,
    host_specimen_ref,
    ig_ref,
    ig_num,
    ig_num_indexed,
    ig_date_mask,
    ig_date,
    acquisition_category,
    acquisition_date_mask,
    acquisition_date,
    individual_ref,
    individual_type,
    individual_type_group,
    individual_type_search,
    individual_sex,
    individual_state,
    individual_stage,
    individual_social_status,
    individual_rock_form,
    individual_count_min,
    individual_count_max,
    part_ref,
    part,
    part_status,
    building,
    "floor",
    "room",
    "row",
    shelf,
    "container",
    sub_container,
    container_type,
    sub_container_type,
    container_storage,
    sub_container_storage,
    part_count_min,
    part_count_max,
    specimen_status,
    "complete",
    surnumerary
)
(SELECT
  spec.id,
  spec.category,
  spec.collection_ref,
  coll.collection_type,
  coll.code,
  coll.name,
  coll.is_public,
  coll.parent_ref,
  coll.path,
  spec.expedition_ref,
  exp.name,
  exp.name_ts,
  exp.name_indexed,
  spec.station_visible,
  spec.gtu_ref,
  gtu.code,
  gtu.parent_ref,
  gtu.path,
  gtu.gtu_from_date_mask,
  gtu.gtu_from_date,
  gtu.gtu_to_date_mask,
  gtu.gtu_to_date,
  gtu.tag_values_indexed,
  taggr.tag_value,
  (select lineToTagArray(tag_value) FROM tag_groups taggr WHERE gtu.id = taggr.gtu_ref AND taggr.group_name_indexed = 'administrativearea' AND taggr.sub_group_name_indexed = 'country'),
  gtu.location,
  ( select array_accum(DISTINCT people_ref) from catalogue_people p INNER JOIN identifications i ON p.record_id = i.id AND p.referenced_relation = 'identifications' where i.referenced_relation='specimens' and p.people_type='identifier' and i.record_id = spec.id ),
  ( select array_accum(DISTINCT people_ref) from catalogue_people p INNER JOIN identifications i ON p.record_id = i.id AND p.referenced_relation = 'identifications' where i.referenced_relation='specimen_individuals' and p.people_type='identifier' and i.record_id = sInd.id ),
  ( select array_accum(DISTINCT people_ref) from catalogue_people where referenced_relation='specimens' and people_type='collector' and record_id = spec.id),
  ( select array_accum(DISTINCT people_ref) from catalogue_people where referenced_relation='specimens' and people_type='donator' and record_id = spec.id),
  spec.taxon_ref,
  taxon.name,
  taxon.name_indexed,
  taxon.name_order_by,
  taxon.level_ref,
  taxon_level.level_name,
  taxon.status,
  taxon.path,
  taxon.parent_ref,
  taxon.extinct,
  spec.litho_ref,
  litho.name,
  litho.name_indexed,
  litho.name_order_by,
  litho.level_ref,
  litho_level.level_name,
  litho.status,
  litho.local_naming,
  litho.color,
  litho.path,
  litho.parent_ref,
  spec.chrono_ref,
  chrono.name,
  chrono.name_indexed,
  chrono.name_order_by,
  chrono.level_ref,
  chrono_level.level_name,
  chrono.status,
  chrono.local_naming,
  chrono.color,
  chrono.path,
  chrono.parent_ref,
  spec.lithology_ref,
  lithology.name,
  lithology.name_indexed,
  lithology.name_order_by,
  lithology.level_ref,
  lithology_level.level_name,
  lithology.status,
  lithology.local_naming,
  lithology.color,
  lithology.path,
  lithology.parent_ref,
  spec.mineral_ref,
  mineral.name,
  mineral.name_indexed,
  mineral.name_order_by,
  mineral.level_ref,
  mineral_level.level_name,
  mineral.status,
  mineral.local_naming,
  mineral.color,
  mineral.path,
  mineral.parent_ref,
  spec.host_taxon_ref,
  spec.host_relationship,
  host_taxon.name,
  host_taxon.name_indexed,
  host_taxon.name_order_by,
  host_taxon.level_ref,
  host_taxon_level.level_name,
  host_taxon.status,
  host_taxon.path,
  host_taxon.parent_ref,
  host_taxon.extinct,
  spec.host_specimen_ref,
  spec.ig_ref,
  igs.ig_num,
  igs.ig_num_indexed,
  igs.ig_date_mask,
  igs.ig_date,
  spec.acquisition_category,
  spec.acquisition_date_mask,
  spec.acquisition_date,
  sInd.id,
  coalesce(sInd.type, 'specimen'),
  coalesce(sInd.type_group, 'specimen'),
  coalesce(sInd.type_search, 'specimen'),
  coalesce(sInd.sex, 'undefined'),
  coalesce(sInd.state, 'not applicable'),
  coalesce(sInd.stage, 'undefined'),
  coalesce(sInd.social_status, 'not applicable'),
  coalesce(sInd.rock_form, 'not applicable'),
  coalesce(sInd.specimen_individuals_count_min, 1),
  coalesce(sInd.specimen_individuals_count_max, 1),
  sPart.id,
  sPart.specimen_part,
  sPart.specimen_status,
  sPart.building,
  sPart.floor,
  sPart.room,
  sPart.row,
  sPart.shelf,
  sPart.container,
  sPart.sub_container,
  sPart.container_type,
  sPart.sub_container_type,
  sPart.container_storage,
  sPart.sub_container_storage,
  sPart.specimen_part_count_min,
  sPart.specimen_part_count_max,
  sPart.specimen_status,
  sPart.complete,
  sPart.surnumerary
FROM specimens spec
     LEFT JOIN igs ON spec.ig_ref = igs.id
     INNER JOIN collections coll ON spec.collection_ref = coll.id
     INNER JOIN expeditions exp ON spec.expedition_ref = exp.id
     INNER JOIN (gtu LEFT JOIN tag_groups taggr ON gtu.id = taggr.gtu_ref 
                                                AND taggr.group_name_indexed = 'administrativearea' 
                                                AND sub_group_name_indexed = 'country'
                ) ON spec.gtu_ref = gtu.id
     INNER JOIN (taxonomy taxon INNER JOIN catalogue_levels taxon_level ON taxon.level_ref = taxon_level.id
                ) ON spec.taxon_ref = taxon.id
     INNER JOIN (chronostratigraphy chrono INNER JOIN catalogue_levels chrono_level ON chrono.level_ref = chrono_level.id
                ) ON spec.chrono_ref = chrono.id
     INNER JOIN (lithostratigraphy litho INNER JOIN catalogue_levels litho_level ON litho.level_ref = litho_level.id
                ) ON spec.litho_ref = litho.id
     INNER JOIN (lithology INNER JOIN catalogue_levels lithology_level ON lithology.level_ref = lithology_level.id
                ) ON spec.lithology_ref = lithology.id
     INNER JOIN (mineralogy mineral INNER JOIN catalogue_levels mineral_level ON mineral.level_ref = mineral_level.id
                ) ON spec.mineral_ref = mineral.id
     INNER JOIN (taxonomy host_taxon INNER JOIN catalogue_levels host_taxon_level ON host_taxon.level_ref = host_taxon_level.id
                ) ON spec.host_taxon_ref = host_taxon.id
     LEFT JOIN (specimen_individuals sInd LEFT JOIN specimen_parts sPart ON sInd.id = sPart.specimen_individual_ref
               ) ON spec.id = sInd.specimen_ref
);

UPDATE darwin_flat
SET with_types = TRUE
WHERE spec_ref IN
(SELECT DISTINCT specimen_ref FROM specimen_individuals WHERE type_group <> 'specimen');

UPDATE darwin_flat
SET with_individuals = TRUE
WHERE individual_ref IS NOT NULL;

UPDATE darwin_flat
SET with_parts = TRUE
WHERE part_ref IS NOT NULL;


select setval('darwin_flat_id_seq'::regclass, (select case when max(id) = 0 then 1 else max(id) end from only darwin2.darwin_flat));


\i ../createindexes_darwinflat.sql
