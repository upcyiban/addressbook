package cn.edu.upc.adressbook.model;

import javax.persistence.*;

/**
 * Created by yyljj on 2016/5/20.
 */
@Entity
@Table(name = "addressbook")
public class AddressBook {

    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    private int id;

    private String section;
    private String position;
    private String telephone;
    private int value;
    public AddressBook(String section, String position, String telephone, int value) {
        this.section = section;
        this.position = position;
        this.telephone = telephone;
        this.value = value;
    }
    public AddressBook(){}

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getSection() {
        return section;
    }

    public void setSection(String section) {
        this.section = section;
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

    public int getValue() {
        return value;
    }

    public void setValue(int value) {
        this.value = value;
    }
}
