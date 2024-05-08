CREATE TABLE usuarios (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  alias VARCHAR(255) NOT NULL UNIQUE,
  correo_electronico VARCHAR(255) NOT NULL UNIQUE,
  contrasenya VARCHAR(255) NOT NULL,
  adm TINYINT(1) NOT NULL DEFAULT 0  -- 0 for regular user, 1 for admin
);
CREATE TABLE partidas (
  id_partida INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  id_usuario1 INT UNSIGNED NOT NULL,
  id_usuario2 INT UNSIGNED NOT NULL,
  resultado TINYINT(1) DEFAULT 0,  -- 0 for draw, 1 for player 1 win, 2 for player 2 win
  FOREIGN KEY (id_usuario1) REFERENCES usuarios(id),
  FOREIGN KEY (id_usuario2) REFERENCES usuarios(id)
);
CREATE TABLE estadisticas_jugador (
  id INT UNSIGNED PRIMARY KEY,
  num_juegos INT UNSIGNED NOT NULL DEFAULT 0,
  num_victorias INT UNSIGNED NOT NULL DEFAULT 0,
  num_derrotas INT UNSIGNED NOT NULL DEFAULT 0,
  mejor_puntuacion INT UNSIGNED DEFAULT 0,
  peor_puntuacion INT UNSIGNED DEFAULT 0,
  FOREIGN KEY (id) REFERENCES usuarios(id)
);
INSERT INTO `usuarios` (`id`, `alias`, `correo_electronico`, `contrasenya`, `adm`) VALUES
(1, 'usuario1', 'usuario1@example.com', 'contrasena1', 0),
(2, 'admin', 'admin@example.com', 'admin123', 1),
(3, 'usuario2', 'usuario2@example.com', 'contrasena2', 0),
(4, 'usuario3', 'usuario3@example.com', 'contrasena3', 0);
-- Datos ficticios para la tabla "partidas"
INSERT INTO partidas (id_usuario1, id_usuario2, resultado) VALUES
(1, 2, 1), -- Usuario1 vs Admin, Usuario1 gana
(3, 4, 2), -- Usuario2 vs Usuario3, Usuario3 gana
(2, 4, 0); -- Admin vs Usuario3, Empate

-- Datos ficticios para la tabla "estadisticas_jugador"
-- Considerando únicamente victorias y derrotas en los ejemplos de partidas anteriores
INSERT INTO estadisticas_jugador (id, num_juegos, num_victorias, num_derrotas, mejor_puntuacion, peor_puntuacion) VALUES
(1, 1, 1, 0, 100, 0), -- Usuario1, 1 juego jugado, 1 victoria, 0 derrotas, mejor puntuación 100, peor puntuación 0
(2, 2, 1, 1, 200, 50), -- Admin, 2 juegos jugados, 1 victoria, 1 derrota, mejor puntuación 200, peor puntuación 50
(3, 1, 0, 1, 0, 20),   -- Usuario2, 1 juego jugado, 0 victorias, 1 derrota, mejor puntuación 0, peor puntuación 20
(4, 2, 1, 1, 150, 30); -- Usuario3, 2 juegos jugados, 1 victoria, 1 derrota, mejor puntuación 150, peor puntuación 30

