CREATE DATABASE count

USE count

CREATE TABLE tb_caleg (
	id int PRIMARY KEY AUTO_INCREMENT,
	nama varchar(10),
	id_partai int,
    earned_vote int
)

CREATE TABLE tb_partai (
	id int PRIMARY KEY AUTO_INCREMENT,
	nama varchar(40)
)


INSERT INTO tb_caleg VALUES
 ('','Sera','2','100'),
 ('','Doubleh','1','99')

INSERT INTO tb_partai VALUES
 ('','Cilacap Santai'),
 ('','Cilacap Sejahtera')

 -- Soal Soalnya

1. SELECT * FROM tb_caleg
   SELECT * FROM tb_partai

2. INSERT INTO tb_partai VALUES
    ('','Cilacap Aman')

3. UPDATE tb_partai SET nama='Cilacap Makmur' WHERE id='2'

4. INSERT INTO tb_caleg VALUES
    ('','Kabur','3','69'),
    ('','Astina','3','21')

5. UPDATE tb_caleg SET nama='Is Bos', id_partai='2', earned_vote='70' WHERE id='1'

6. DELETE FROM tb_caleg WHERE nama='Astina'
   Atau 
   DELETE FROM tb_caleg WHERE id='4'

7. SELECT tb_caleg.nama, tb_partai.nama FROM tb_caleg 
   INNER JOIN tb_partai ON tb_partai.id=tb_caleg.id_partai

8. SELECT tb_caleg.*, tb_partai.nama FROM tb_caleg 
   INNER JOIN tb_partai ON tb_partai.id=tb_caleg.id_partai WHERE tb_caleg.id='3'