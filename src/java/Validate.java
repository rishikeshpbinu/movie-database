import java.sql.*;

public class Validate {
    public static boolean checkUser(String uname,String pwd) 
    {
        boolean st =false;
        try {

            //loading drivers for mysql
            Class.forName("com.mysql.jdbc.Driver");

            //creating connection with the database
            Connection con = DriverManager.getConnection("jdbc:mysql:/ /localhost:3306/mydb","root","Vaishu@1234");
            PreparedStatement ps = con.prepareStatement("select * from register where uname=? and pwd=?");
            ps.setString(1, uname);
            ps.setString(2, pwd);
            ResultSet rs =ps.executeQuery();
            st = rs.next();

        }
        catch(ClassNotFoundException | SQLException e) {
        }
        return st;                 
    }   
}
