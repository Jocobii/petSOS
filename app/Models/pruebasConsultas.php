Seleccionar al usuario su mascota y la raza que es.

SELECT u.nombre, u.nombre_usuario, m.nombre, m.descripcion,r.nombre
FROM mascota as m
INNER JOIN usuario as u on m.usuario_id = u.id
INNER join raza as r on r.id = m.raza_id