package cn.yyljj.www.controller;

import cn.yyljj.www.model.Adressbook;
import cn.yyljj.www.model.AdressbookDao;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

/**
 * Created by yyljj on 2016/5/16.
 */
@Controller
public class InsertController {

    @Autowired
    private AdressbookDao = adressbookdao;


    @RequestMapping(value = "/insert",method = RequestMethod.POST)
    public String insertDate(String department, String position, String telephone, int value){
        Adressbook adressbook = new Adressbook(department,position,telephone,value);




    }
}
