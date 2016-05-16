package cn.yyljj.www.model;

import org.springframework.data.annotation.Id;

import javax.persistence.Entity;
import javax.persistence.GeneratedValue;
import javax.persistence.GenerationType;
import javax.persistence.Table;


/**
 * Created by yyljj on 2016/5/16.
 */
@Entity
public class Adressbook {
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private long id;

    private String department;
    private String position;
    private String telephone;
    private int value = 0;//设置权值，控制排序次序

    public Adressbook(String department ,String position,String telephone,int value){
        this.department = department;
        this.position = position;
        this.telephone = telephone;
        this.value = value;
    }

    public int getValue() {
        return value;
    }

    public void setValue(int value) {
        this.value = value;
    }

    public long getId() {
        return id;
    }

    public void setId(long id) {
        this.id = id;
    }

    public String getDepartment() {
        return department;
    }

    public void setDepartment(String department) {
        this.department = department;
    }

    public String getPosition() {
        return position;
    }

    public void setPosition(String position) {
        this.position = position;
    }

    public String getTelephone() {
        return telephone;
    }

    public void setTelephone(String telephone) {
        this.telephone = telephone;
    }
}
