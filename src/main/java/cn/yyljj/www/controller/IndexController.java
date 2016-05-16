package cn.yyljj.www.controller;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.RequestMapping;

/**
 * Created by yyljj on 2016/5/16.
 */
@Controller
public class IndexController {

    @RequestMapping("/")
    public String showIndex(){
        return "index";
    }

}
