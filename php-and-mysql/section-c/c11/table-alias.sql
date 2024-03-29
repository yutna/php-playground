SELECT a.id, a.title, c.name, i.file, i.alt
FROM article AS a
JOIN category AS c ON a.category_id = c.id
LEFT JOIN image AS i ON a.image_id = i.id
WHERE a.category_id = 3 AND a.published = 1
ORDER BY a.id DESC;
