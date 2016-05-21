package cn.edu.upc.adressbook.controller;


import cn.edu.upc.adressbook.model.AddressBook;
import cn.edu.upc.adressbook.model.AddressBookDao;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;

import java.util.ArrayList;
import java.util.Iterator;


/**
 * Created by 易班技术开发部 on 2016/5/20.
 */
@Controller
public class IndexController {

    @Autowired
    private AddressBookDao addressBookDao;

    @RequestMapping("/")
    public String showIndex(Model model){

        return "index";
    }

    private void getAllSection(Model model){
        Iterable<AddressBook> allAddress = addressBookDao.findAll();
        Iterator<AddressBook> addressBookIterator = allAddress.iterator();
        ArrayList<AddressBook> allsection = new ArrayList<AddressBook>();
        if((AddressBook)addressBookIterator == addressBookIterator.next()){
            addressBookIterator.remove();
        }else {
            allsection.add((AddressBook) addressBookIterator);
        }
        model.addAttribute("section",allAddress);

    }




}
