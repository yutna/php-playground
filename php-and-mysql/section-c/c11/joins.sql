SELECT article.id, article.title, category.name, image.file, image.alt
FROM article
JOIN category ON article.category_id = category.id
LEFT JOIN image ON article.image_id = image.id
WHERE article.category_id = 3 AND article.published = 1
ORDER BY article.id DESC;
