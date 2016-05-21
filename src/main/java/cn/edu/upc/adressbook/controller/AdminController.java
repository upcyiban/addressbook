package cn.edu.upc.adressbook.controller;

import cn.edu.upc.adressbook.model.AddressBook;
import cn.edu.upc.adressbook.model.AddressBookDao;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;

import java.util.ArrayList;
import java.util.Iterator;

/**
 * Created by yyljj on 2016/5/20.
 */
@Controller
public class AdminController {

    @Autowired
    private AddressBookDao addressBookDao;


    //暂时添加数据界面，后期可删除
    @RequestMapping("/test")
    public String showTestAdd(){
        return "testadd";
    }

    @RequestMapping(value = "/testadd",method = RequestMethod.POST)
    public String testAdd(String section,String position,String telephone,int value){
        AddressBook addressBook = new AddressBook(section,position,telephone,value);
        addressBookDao.save(addressBook);
        return "redirect:/test";

    }



}
