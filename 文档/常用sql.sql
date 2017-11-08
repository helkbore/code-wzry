--  查询只有一个hero的user (除标配)
select user_id, count(*)as hero_nums from wzry_user_hero where hero_id not in (select hero_id from wzry_hero where hero_name in('安其拉', '妲己', '亚瑟', '项羽')) group by user_id having count(*) < 2;

-- 查询未拥有的hero
select * from wzry_hero where hero_id not in (select hero_id from wzry_user_hero);
select * from wzry_hero where hero_id not in (select hero_id from wzry_user_hero GROUP BY hero_id);



-- 按money 排序user
select * from wzry_user ORDER by money desc;

-- 查询user所有相关信息
select a.account_id, a.type, a.account, aa.area_id, aa.area_no, u.user_id, u.name, u.`level`, u.money, u.diamond, u.last_time
 from wzry_user as u left join wzry_account as a on u.account_id = a.account_id left join wzry_area as aa on u.area_id = aa.area_id; 
 
 -- 查询main_user相关信息
select * from wzry_main_hero as mh left join wzry_user as u on mh.user_id = u.user_id LEFT JOIN wzry_hero as h on mh.hero_id = h.hero_id; 

-- 查询 user_hero 相关信息
select uh.user_id, uv.type, uv.account, uv.area_no, uv.name, uh.hero_id, h.hero_name from wzry_user_hero as uh left join userview as uv on uh.user_id = uv.user_id left join wzry_hero as h on uh.hero_id = h.hero_id ;
-- 查询main_user相关信息
select mh.user_id, uv.type, uv.account, uv.area_no, uv.name, mh.hero_id, h.hero_name  from wzry_main_hero as mh left join userview as uv on mh.user_id = uv.user_id left join wzry_hero as h on mh.hero_id = h.hero_id;wzry

-- 未拥有的英雄
select * from wzry_hero where hero_id not in (select hero_id from wzry_user_hero);

-- 未匹配main的英雄
select * from wzry_hero where hero_id not in (select hero_id from wzry_temp_hmu union select hero_id from wzry_hero where hero_id not in (select hero_id from wzry_user_hero));

-- 获取只有该hero的user
select * from wzry_user_hero where hero_id not in (select hero_id from wzry_temp_hmu) group by user_id having count(*) < 2 LIMIT 1

-- 获取该hero只有一个user拥有
select * from wzry_user_hero where hero_id not in (select hero_id from wzry_temp_hmu) group by hero_id having count(*) < 2 LIMIT 1

-- 获取自动匹配时未匹配到的user
select *,  GROUP_CONCAT(hero_name) as having_hero from uhview where user_id not in (select user_id from wzry_temp_hmu group by user_id) GROUP BY user_id ;