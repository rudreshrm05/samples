import java.io.BufferedReader;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.net.HttpURLConnection;
import java.net.URL;
import java.util.Scanner;

public class Interacting_things {
	
	public static void get_things() {
		try {
			URL url = new URL("http://192.168.43.129/things");
			HttpURLConnection con = (HttpURLConnection) url.openConnection();
			con.setRequestMethod("GET");
			con.setRequestProperty("Accept", "application/json");
			con.setRequestProperty("Authorization", "Bearer eyJhbGciOiJFUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6IjM1NGVlYjk5LTJhYWItNGE1Ni04OWQ5LTc2ZWNmMDVkMmRiYiJ9.eyJyb2xlIjoidXNlcl90b2tlbiIsImlhdCI6MTU2MjEyODg5MiwiaXNzIjoiTm90IHNldC4ifQ.KQthZcRxvzzWIE_3PjEEWnsFK9sYpluxkGugaqxffMncd1ikZwwRzVnVcU_uoD_vekLtlEVUxKDlXNJeHg-Rmw");
			
			int status = con.getResponseCode();
			
			BufferedReader in = new BufferedReader(
					  new InputStreamReader(con.getInputStream()));
					String inputLine;
					StringBuffer content = new StringBuffer();
					while ((inputLine = in.readLine()) != null) {
					    content.append(inputLine);
					}
					in.close();
					
					con.disconnect();
					
					System.out.println(content);
					
			}catch(Exception e) {}
	}
	
	public static void set_property(boolean prop) {
		try {
			URL url = new URL("http://192.168.43.129/things/virtual-things-7/properties/on");
			HttpURLConnection con = (HttpURLConnection) url.openConnection();
			con.setRequestMethod("PUT");
			con.setDoOutput(true);
			
			con.setRequestProperty("Accept", "application/json");
			con.setRequestProperty("Authorization", "Bearer eyJhbGciOiJFUzI1NiIsInR5cCI6IkpXVCIsImtpZCI6IjM1NGVlYjk5LTJhYWItNGE1Ni04OWQ5LTc2ZWNmMDVkMmRiYiJ9.eyJyb2xlIjoidXNlcl90b2tlbiIsImlhdCI6MTU2MjEyODg5MiwiaXNzIjoiTm90IHNldC4ifQ.KQthZcRxvzzWIE_3PjEEWnsFK9sYpluxkGugaqxffMncd1ikZwwRzVnVcU_uoD_vekLtlEVUxKDlXNJeHg-Rmw");
			con.setRequestProperty("Content-Type", "application/json");
			
			OutputStreamWriter osw = new OutputStreamWriter(con.getOutputStream());
			osw.write(String.format("{\"on\":"+prop+"}"));
			osw.flush();
			osw.close();
			
			System.out.println(con.getResponseCode());
			
			BufferedReader in = new BufferedReader(
					  new InputStreamReader(con.getInputStream()));
					String inputLine;
					StringBuffer content = new StringBuffer();
					while ((inputLine = in.readLine()) != null) {
					    content.append(inputLine);
					}
					in.close();
					
					con.disconnect();
					
					System.out.println(content);
				
		}catch(Exception e) {}
	}
	
	public static void main(String args[]) {
		Scanner read=new Scanner(System.in);
		System.out.println("1 .Get all the things\n2. Set light on\n3. Set light off");
		int choice=0;
		choice=read.nextInt();
		
		switch(choice) {
		case 1:get_things();break;
		case 2:set_property(true);break;
		case 3:set_property(false);break;
		}
		
	}
}
