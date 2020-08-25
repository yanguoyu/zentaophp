ALTER TABLE zt_project ADD willEnd DATE NOT NULL
UPDATE zt_project SET willEnd=`end`