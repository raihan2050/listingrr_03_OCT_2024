// vite.config.js
import { defineConfig } from "file:///D:/xampp8212/htdocs/deshismash/listingrr/listingrr_03_OCT_2024/node_modules/vite/dist/node/index.js";
import laravel from "file:///D:/xampp8212/htdocs/deshismash/listingrr/listingrr_03_OCT_2024/node_modules/laravel-vite-plugin/dist/index.js";
import { viteStaticCopy } from "file:///D:/xampp8212/htdocs/deshismash/listingrr/listingrr_03_OCT_2024/node_modules/vite-plugin-static-copy/dist/index.js";
var vite_config_default = defineConfig({
  plugins: [
    laravel({
      input: [
        // Resources paths
        "resources/css/app.css",
        "resources/sass/app.scss",
        "resources/js/app.js",
        // Resources assets js file paths
        "resources/assets/js/accordiation",
        "resources/assets/js/advancedform",
        "resources/assets/js/alerts",
        "resources/assets/js/blog-edit",
        "resources/assets/js/carousel",
        "resources/assets/js/cart",
        "resources/assets/js/chart",
        "resources/assets/js/chat",
        "resources/assets/js/checkout",
        "resources/assets/js/colorpicker",
        "resources/assets/js/echarts",
        "resources/assets/js/flatpickr",
        "resources/assets/js/flot",
        "resources/assets/js/form-editor2",
        "resources/assets/js/form-elements",
        "resources/assets/js/form-validation",
        "resources/assets/js/formelementadvnced",
        "resources/assets/js/fullcalendar",
        "resources/assets/js/index1",
        "resources/assets/js/index2",
        "resources/assets/js/index3",
        "resources/assets/js/index4",
        "resources/assets/js/index5",
        "resources/assets/js/jquery.sparkline",
        "resources/assets/js/jvectormap",
        "resources/assets/js/map-leafleft",
        "resources/assets/js/mapelmaps",
        "resources/assets/js/modal",
        "resources/assets/js/morris",
        "resources/assets/js/nvd3",
        "resources/assets/js/rangeslider",
        "resources/assets/js/select2",
        "resources/assets/js/summernote",
        "resources/assets/js/sweet-alert",
        "resources/assets/js/table-data",
        "resources/assets/js/themeColors",
        "resources/assets/switcher/js/switcher",
        "resources/assets/js/ajax",
        "resources/assets/js/common",
        "resources/assets/back/js/coupon.js",
        "resources/assets/back/scss/coupon.scss",
        "resources/assets/back/js/tax_general",
        "resources/assets/back/js/tax_state",
        "resources/assets/back/js/currency_manager",
        "resources/assets/back/js/gateway_manager",
        "resources/assets/back/js/form_beforeunload"
      ],
      refresh: true
    }),
    viteStaticCopy({
      targets: [
        {
          src: ["resources/assets/images/", "resources/assets/plugins/", "resources/assets/iconfonts/", "resources/assets/js/sticky.js"],
          dest: "assets/"
        }
      ]
    }),
    {
      name: "blade",
      handleHotUpdate({ file, server }) {
        if (file.endsWith(".blade.php")) {
          server.ws.send({
            type: "full-reload",
            path: "*"
          });
        }
      }
    }
  ],
  build: {
    chunkSizeWarningLimit: 1600
  }
});
export {
  vite_config_default as default
};
//# sourceMappingURL=data:application/json;base64,ewogICJ2ZXJzaW9uIjogMywKICAic291cmNlcyI6IFsidml0ZS5jb25maWcuanMiXSwKICAic291cmNlc0NvbnRlbnQiOiBbImNvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9kaXJuYW1lID0gXCJEOlxcXFx4YW1wcDgyMTJcXFxcaHRkb2NzXFxcXGRlc2hpc21hc2hcXFxcbGlzdGluZ3JyXFxcXGxpc3Rpbmdycl8wM19PQ1RfMjAyNFwiO2NvbnN0IF9fdml0ZV9pbmplY3RlZF9vcmlnaW5hbF9maWxlbmFtZSA9IFwiRDpcXFxceGFtcHA4MjEyXFxcXGh0ZG9jc1xcXFxkZXNoaXNtYXNoXFxcXGxpc3RpbmdyclxcXFxsaXN0aW5ncnJfMDNfT0NUXzIwMjRcXFxcdml0ZS5jb25maWcuanNcIjtjb25zdCBfX3ZpdGVfaW5qZWN0ZWRfb3JpZ2luYWxfaW1wb3J0X21ldGFfdXJsID0gXCJmaWxlOi8vL0Q6L3hhbXBwODIxMi9odGRvY3MvZGVzaGlzbWFzaC9saXN0aW5ncnIvbGlzdGluZ3JyXzAzX09DVF8yMDI0L3ZpdGUuY29uZmlnLmpzXCI7aW1wb3J0IHsgZGVmaW5lQ29uZmlnIH0gZnJvbSAndml0ZSc7XG5pbXBvcnQgbGFyYXZlbCBmcm9tICdsYXJhdmVsLXZpdGUtcGx1Z2luJztcbmltcG9ydCB7IHZpdGVTdGF0aWNDb3B5IH0gZnJvbSAndml0ZS1wbHVnaW4tc3RhdGljLWNvcHknXG5cbmV4cG9ydCBkZWZhdWx0IGRlZmluZUNvbmZpZyh7XG4gICAgcGx1Z2luczogW1xuICAgICAgICBsYXJhdmVsKHtcbiAgICAgICAgICAgIGlucHV0OiBbXG4gICAgICAgICAgICAgICAgLy8gUmVzb3VyY2VzIHBhdGhzXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9jc3MvYXBwLmNzcycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9zYXNzL2FwcC5zY3NzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2pzL2FwcC5qcycsXG5cbiAgICAgICAgICAgICAgICAvLyBSZXNvdXJjZXMgYXNzZXRzIGpzIGZpbGUgcGF0aHNcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9hY2NvcmRpYXRpb24nLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2FkdmFuY2VkZm9ybScsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvYWxlcnRzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9ibG9nLWVkaXQnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2Nhcm91c2VsJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9jYXJ0JyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9jaGFydCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY2hhdCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY2hlY2tvdXQnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2NvbG9ycGlja2VyJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9lY2hhcnRzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9mbGF0cGlja3InLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2Zsb3QnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2Zvcm0tZWRpdG9yMicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZm9ybS1lbGVtZW50cycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvZm9ybS12YWxpZGF0aW9uJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9mb3JtZWxlbWVudGFkdm5jZWQnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2Z1bGxjYWxlbmRhcicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvaW5kZXgxJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9pbmRleDInLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2luZGV4MycsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvaW5kZXg0JyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9pbmRleDUnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2pxdWVyeS5zcGFya2xpbmUnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL2p2ZWN0b3JtYXAnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL21hcC1sZWFmbGVmdCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvbWFwZWxtYXBzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9tb2RhbCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvbW9ycmlzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9udmQzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9qcy9yYW5nZXNsaWRlcicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvc2VsZWN0MicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvc3VtbWVybm90ZScsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvc3dlZXQtYWxlcnQnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL3RhYmxlLWRhdGEnLFxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2pzL3RoZW1lQ29sb3JzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9zd2l0Y2hlci9qcy9zd2l0Y2hlcicsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvYWpheCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvanMvY29tbW9uJyxcblxuICAgICAgICAgICAgICAgICdyZXNvdXJjZXMvYXNzZXRzL2JhY2svanMvY291cG9uLmpzJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9iYWNrL3Njc3MvY291cG9uLnNjc3MnLFxuXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvYmFjay9qcy90YXhfZ2VuZXJhbCcsXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvYmFjay9qcy90YXhfc3RhdGUnLFxuXG4gICAgICAgICAgICAgICAgJ3Jlc291cmNlcy9hc3NldHMvYmFjay9qcy9jdXJyZW5jeV9tYW5hZ2VyJyxcbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9iYWNrL2pzL2dhdGV3YXlfbWFuYWdlcicsXG5cbiAgICAgICAgICAgICAgICAncmVzb3VyY2VzL2Fzc2V0cy9iYWNrL2pzL2Zvcm1fYmVmb3JldW5sb2FkJyxcblxuICAgICAgICAgICAgXSxcbiAgICAgICAgICAgIHJlZnJlc2g6IHRydWUsXG4gICAgICAgIH0pLFxuICAgICAgICB2aXRlU3RhdGljQ29weSh7XG4gICAgICAgICAgICB0YXJnZXRzOiBbXG4gICAgICAgICAgICAgIHtcbiAgICAgICAgICAgICAgICBzcmM6IChbJ3Jlc291cmNlcy9hc3NldHMvaW1hZ2VzLycsICdyZXNvdXJjZXMvYXNzZXRzL3BsdWdpbnMvJywgJ3Jlc291cmNlcy9hc3NldHMvaWNvbmZvbnRzLycsICdyZXNvdXJjZXMvYXNzZXRzL2pzL3N0aWNreS5qcycsXSksXG4gICAgICAgICAgICAgICAgZGVzdDogJ2Fzc2V0cy8nXG4gICAgICAgICAgICAgIH1cbiAgICAgICAgICAgIF1cbiAgICAgICAgfSksXG4gICAgICAgIHtcbiAgICAgICAgICAgIG5hbWU6ICdibGFkZScsXG4gICAgICAgICAgICBoYW5kbGVIb3RVcGRhdGUoeyBmaWxlLCBzZXJ2ZXIgfSkge1xuICAgICAgICAgICAgICAgIGlmIChmaWxlLmVuZHNXaXRoKCcuYmxhZGUucGhwJykpIHtcbiAgICAgICAgICAgICAgICAgICAgc2VydmVyLndzLnNlbmQoe1xuICAgICAgICAgICAgICAgICAgICAgICAgdHlwZTogJ2Z1bGwtcmVsb2FkJyxcbiAgICAgICAgICAgICAgICAgICAgICAgIHBhdGg6ICcqJyxcbiAgICAgICAgICAgICAgICAgICAgfSk7XG4gICAgICAgICAgICAgICAgfVxuICAgICAgICAgICAgfSxcbiAgICAgICAgfVxuICAgIF0sXG4gICAgYnVpbGQ6IHtcbiAgICAgICAgY2h1bmtTaXplV2FybmluZ0xpbWl0OiAxNjAwLFxuICAgIH0sXG59KTtcbiJdLAogICJtYXBwaW5ncyI6ICI7QUFBd1gsU0FBUyxvQkFBb0I7QUFDclosT0FBTyxhQUFhO0FBQ3BCLFNBQVMsc0JBQXNCO0FBRS9CLElBQU8sc0JBQVEsYUFBYTtBQUFBLEVBQ3hCLFNBQVM7QUFBQSxJQUNMLFFBQVE7QUFBQSxNQUNKLE9BQU87QUFBQTtBQUFBLFFBRUg7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBO0FBQUEsUUFHQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFDQTtBQUFBLFFBQ0E7QUFBQSxRQUNBO0FBQUEsUUFFQTtBQUFBLFFBQ0E7QUFBQSxRQUVBO0FBQUEsUUFDQTtBQUFBLFFBRUE7QUFBQSxRQUNBO0FBQUEsUUFFQTtBQUFBLE1BRUo7QUFBQSxNQUNBLFNBQVM7QUFBQSxJQUNiLENBQUM7QUFBQSxJQUNELGVBQWU7QUFBQSxNQUNYLFNBQVM7QUFBQSxRQUNQO0FBQUEsVUFDRSxLQUFNLENBQUMsNEJBQTRCLDZCQUE2QiwrQkFBK0IsK0JBQWdDO0FBQUEsVUFDL0gsTUFBTTtBQUFBLFFBQ1I7QUFBQSxNQUNGO0FBQUEsSUFDSixDQUFDO0FBQUEsSUFDRDtBQUFBLE1BQ0ksTUFBTTtBQUFBLE1BQ04sZ0JBQWdCLEVBQUUsTUFBTSxPQUFPLEdBQUc7QUFDOUIsWUFBSSxLQUFLLFNBQVMsWUFBWSxHQUFHO0FBQzdCLGlCQUFPLEdBQUcsS0FBSztBQUFBLFlBQ1gsTUFBTTtBQUFBLFlBQ04sTUFBTTtBQUFBLFVBQ1YsQ0FBQztBQUFBLFFBQ0w7QUFBQSxNQUNKO0FBQUEsSUFDSjtBQUFBLEVBQ0o7QUFBQSxFQUNBLE9BQU87QUFBQSxJQUNILHVCQUF1QjtBQUFBLEVBQzNCO0FBQ0osQ0FBQzsiLAogICJuYW1lcyI6IFtdCn0K
