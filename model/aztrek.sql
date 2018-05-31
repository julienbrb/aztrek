USE aztrek;

SELECT
	sejour.id,
    sejour.title,
    sejour.picture,
    sejour.duree,
    depart.price,
    DATE_FORMAT(depart.date_depart, '%d-%m-%Y') AS date_depart,
--     COUNT(DISTINCT(project_has_member.member_id)) AS nb_members,
    AVG(notation.grade) AS grade
FROM sejour
LEFT JOIN depart ON depart.sejour_id = sejour.id
LEFT JOIN reservation ON reservation.depart_id = depart.id
LEFT JOIN notation on notation.sejour_id = sejour.id
-- GROUP BY project.id
-- ORDER BY project.date_start DESC
LIMIT 3;

SELECT
	sejour.*,
    depart.price AS price,
    depart.date_depart AS depart,
    notation.grade AS grade
FROM sejour
LEFT JOIN depart ON depart.sejour_id = sejour.id
LEFT JOIN notation ON notation.sejour_id = sejour.id
WHERE sejour.pays_id = 2;