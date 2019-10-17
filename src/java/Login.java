import java.io.*;
import javax.servlet.*;
import javax.servlet.http.*;

public class Login extends HttpServlet {
 
    /**
     *
     * @param request
     * @param response
     * @throws ServletException
     * @throws IOException
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
        
        String uname = request.getParameter("uname");
        String pwd = request.getParameter("pwd");
        
        if(Validate.checkUser(uname, pwd))
        {
            RequestDispatcher rs = request.getRequestDispatcher("Welcome");
            rs.forward(request, response);
        }
        else
        {
           out.println("Username or Password incorrect");
           RequestDispatcher rs = request.getRequestDispatcher("login.html");
           rs.include(request, response);
        }
    }  
}
